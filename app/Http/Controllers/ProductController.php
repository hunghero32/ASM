<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
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
        $data = $request->all();

        if ($request->hasFile('img')) {
            // Xóa hình ảnh cũ nếu có
            if ($product->img && Storage::disk('public')->exists($product->img)) {
                Storage::disk('public')->delete($product->img);
            }
            $data['img'] = $request->file('img')->store('products', 'public');
        }

        $product->update($data);
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
    public function indexpro(Request $request)
    {
        $categories = Category::all();
    
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
    
        $products = $query->take(6)->get();
    
        return view('guest.home', compact('products', 'categories'));
    }
    public function showpro(Product $product)
    {
        //
        return view('guest.show', compact('product'));
    }
}
