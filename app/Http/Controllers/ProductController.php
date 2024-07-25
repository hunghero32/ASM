<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['indexpro','showpro']);;
    // }
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
        $data = $request->all();

        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('products', 'public');
        }

        Product::create($data);

        // $product = Product::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Sản phẩm đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('admin.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $product->update($request->all());
        $product->save();
        return redirect()->route('admin.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
    public function indexpro()
    {
        //
        // $products = Product::all();
        $products = Product::take(6)->get();
        return view('guest.home', compact('products'));
    }
    public function showpro(Product $product)
    {
        //
        return view('guest.show', compact('product'));
    }
}
