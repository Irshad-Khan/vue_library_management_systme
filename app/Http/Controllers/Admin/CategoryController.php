<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // select * from categories in php
        return view('admins.caegories.index',compact('categories'));
    }

    public function show($id)
    {
        
        $category = Category::findOrFail($id);
        return view('admins.caegories.show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        return view('admins.caegories.edit',compact('category','categories'));
    }

    public function update(Request $request)
    {
        
        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->update();

        return redirect()->route('admin.categories.index')->with('success','Category Updated Successfully!');
    }

    public function create()
    {
        $categories = Category::all();
        return view('admins.caegories.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->save();
        
        return redirect()->route('admin.categories.index')->with('success','Category Added Successfully!');
    }

    public function delete($id)
    {
        
        Category::find($id)->delete();
        return redirect()->route('admin.categories.index')->with('success','Category Deleted Successfully!');
    }
}
