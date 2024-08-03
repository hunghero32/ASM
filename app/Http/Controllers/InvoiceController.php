<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('cart.user')->get(); // Tải người dùng liên quan đến hóa đơn
        return view('admin.invoices.index', compact('invoices'));
    }
    public function show(Invoice $invoice)
    {
        // Tải người dùng liên quan đến hóa đơn
        $invoice->load('cart.user', 'products'); // Tải sản phẩm liên quan

        return view('admin.invoices.show', compact('invoice'));
    }
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('admin.invoices.index')->with('success', 'Invoice deleted successfully.');
    }

    public function removeProduct(Request $request, $invoiceId, $productId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $invoice->products()->detach($productId);

        return redirect()->route('admin.invoices.edit', $invoiceId)->with('success', 'Product removed from invoice.');
    }

    public function print($invoiceId)
    {
        $invoice = Invoice::with('cart.user')->findOrFail($invoiceId); // Tải người dùng liên quan
        return view('admin.invoices.print', compact('invoice'));
    }
}
