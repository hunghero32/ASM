<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        //
        $userId = Auth::id();
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = Cart::where('user_id','=', $userId)
            ->where('product_id','=', $productId)
            ->first();

        if ($cartItem) {
            // Cập nhật số lượng nếu sản phẩm đã có trong giỏ hàng
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Thêm mới nếu sản phẩm chưa có trong giỏ hàng
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        return redirect()->route('cart.show')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
        $userId = Auth::id();
        $cartItems = Cart::with('product')->where('user_id', $userId)->get();

        return view('guest.cart', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
        if ($cart->user_id === Auth::id()) {
            $cart->delete();
            return redirect()->route('cart.show')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
        }
    
        // Nếu không thuộc về người dùng hiện tại, hiển thị thông báo lỗi
        return redirect()->route('cart.show')->with('error', 'Không thể xóa sản phẩm khỏi giỏ hàng!');
    }
    public function checkout(Cart $cart)
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();

        // Thực hiện các thao tác thanh toán COD như tạo đơn hàng, gửi thông báo, v.v.
        // Xóa giỏ hàng sau khi thanh toán
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('cart.show')->with('success', 'Thanh toán thành công! Cảm ơn bạn đã mua hàng.');
    }
}
