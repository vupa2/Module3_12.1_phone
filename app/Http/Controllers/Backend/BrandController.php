<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use App\Traits\ImageTrait;

class BrandController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $brands = Brand::orderBy('slug')->paginate(config('pagination.number_of_display'));

        return view('backend.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('backend.brands.create');
    }

    public function store(BrandFormRequest $request)
    {
        $brand = new Brand();
        $brand->fill($request->except('_method', '_token', 'image'));
        $this->storeImage($request, $brand, 'image', 'brand');
        $brand->save();

        toast(trans('alert.created_success'), 'success');
        return back();
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
        return view('backend.brands.edit', compact('brand'));
    }

    public function update(BrandFormRequest $request, Brand $brand)
    {
        $brand->fill($request->except('_method', '_token', 'image'));
        $this->storeImage($request, $brand, 'image', 'brand');
        $brand->update();

        toast(trans('alert.updated_success'), 'success');
        return redirect()->route('admin.brands.edit', $brand);
    }

    public function destroy(Brand $brand)
    {
        $this->deleteImage($brand);
        $brand->delete();

        toast(trans('alert.deleted_success'), 'success');
        return back();
    }
}
