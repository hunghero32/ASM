<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index(Request $request)
    {
        // Lấy danh sách các banner có is_active = 1
        $banners = Banner::where('is_active', 1)->get();

        // Lấy danh sách các category có is_active = 1
        $categories = Category::where('is_active', 1)->get();

        // Lấy sản phẩm với các bộ lọc
        $query = Product::where('is_active', 1);

        // Lọc theo Category
        if ($request->has('category_id') && !is_null($request->input('category_id'))) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Lọc theo Phạm vi Giá
        if ($request->has('price_min') && !is_null($request->input('price_min'))) {
            $priceMin = (float) $request->input('price_min');
            $query->where('new_price', '>=', $priceMin);
        }

        if ($request->has('price_max') && !is_null($request->input('price_max'))) {
            $priceMax = (float) $request->input('price_max');
            $query->where('new_price', '<=', $priceMax);
        }

        // Lọc theo Số lượng
        if ($request->has('min_quantity') && !is_null($request->input('min_quantity'))) {
            $minQuantity = (int) $request->input('min_quantity');
            $query->where('quantity', '>=', $minQuantity);
        }

        $products = $query->take(12)->get();

        // Trả về view với thông tin cả banner, sản phẩm và category
        return view('guest.home', compact('banners', 'products', 'categories'));
    }
    public function all()
    {
    }
}
