<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageCategory;
use Illuminate\Http\Request;

class PackageCategoriesController extends Controller
{
    public function index()
    {
        $categories = PackageCategory::all();
        return view('admin.package-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.package-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        PackageCategory::create([
            'name' => $request->name
        ]);

        return back()->with('success', 'New category added successfully!');
    }

    public function show()
    {
        return view('admin.package-categories.show');
    }

    public function edit($id)
    {
        $category = PackageCategory::find($id);
        return view('admin.package-categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = PackageCategory::find($id);
        $category->name = $request->name;
        $category->save();

        return back()->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = PackageCategory::find($id);
        $category->delete();

        return back()->with('success', 'Category deleted successfully!');
    }
}
