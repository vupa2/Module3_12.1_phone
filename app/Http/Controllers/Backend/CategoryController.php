<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('childrenRecursive')->orderBy('slug')->get();

        return view('backend.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();

        return view('backend.categories.create', compact('categories'));
    }

    public function store(CategoryFormRequest $request)
    {
        $brand = new Category();
        $brand->fill($request->except('_method', '_token'));
        $brand->save();

        toast(trans('alert.created_success'), 'success');
        return back();
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();

        return view('backend.categories.edit', compact('category', 'categories'));
    }

    public function update(CategoryFormRequest $request, Category $category)
    {
        $category->fill($request->except('_method', '_token'));
        $category->update();

        toast(trans('alert.updated_success'), 'success');
        return redirect()->route('admin.categories.edit', $category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        toast(trans('alert.deleted_success'), 'success');
        return back();
    }
}
