<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageTrait;

class ProductController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $products = Product::with(['brand', 'category'])->latest()->paginate(config('pagination.number_of_display'));

        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('backend.products.create', compact('brands', 'categories'));
    }

    public function store(ProductFormRequest $request)
    {
        $product = new Product();
        $product->fill($request->except('_method', '_token', 'image'));
        $product->user_id = auth()->user()->id;
        $this->storeImage($request, $product, 'image', 'product');
        $product->save();

        toast(trans('alert.created_success'), 'success');
        return back();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('backend.products.edit', compact('product', 'brands', 'categories'));
    }

    public function update(ProductFormRequest $request, Product $product)
    {
        $product->fill($request->except('_method', '_token', 'image'));
        $this->storeImage($request, $product, 'image', 'product');
        $product->update();

        toast(trans('alert.updated_success'), 'success');
        return redirect()->route('admin.products.edit', $product);
    }

    public function destroy(Product $product)
    {
        $this->deleteImage($product);
        $product->delete();

        toast(trans('alert.deleted_success'), 'success');
        return back();
    }
}
