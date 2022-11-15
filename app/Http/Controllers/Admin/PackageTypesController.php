<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageCategory;
use App\Models\PackageType;
use Illuminate\Http\Request;

class PackageTypesController extends Controller
{
    public function index()
    {
        $types = PackageType::all();
        return view('admin.package-types.index', compact('types'));
    }

    public function create()
    {
        $categories = PackageCategory::all();
        return view('admin.package-types.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        PackageType::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return back()->with('success', 'New type added successfully!');
    }

    public function show()
    {
        return view('admin.package-types.show');
    }

    public function edit($id)
    {
        $type = PackageType::find($id);
        $categories = PackageCategory::all();
        return view('admin.package-types.edit', compact('type', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $type = PackageType::find($id);
        $type->name = $request->name;
        $type->category_id = $request->category_id;
        $type->save();

        return back()->with('success', 'Type updated successfully!');
    }

    public function destroy($id)
    {
        $type = PackageType::find($id);
        $type->delete();

        return back()->with('success', 'Type deleted successfully!');
    }

    public function getTypesJSON($category_id)
    {
        $types = PackageType::where('category_id', $category_id)->get();
        return $types;
    }
}
