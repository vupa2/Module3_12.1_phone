<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('products.active', 1)
            ->join('brands', 'products.brand_id', 'brands.id')
            ->join('categories', 'products.category_id', 'categories.id')
            ->orderBy('products.name')
            ->orderBy('brands.name')
            ->select('products.*', 'brands.name AS brand_name')
            ->paginate(config('pagination.number_of_display'));

        return view('frontend.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return back();
        // return view('frontend.products.show', compact('product'));
    }
}
