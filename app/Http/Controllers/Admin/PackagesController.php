<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\PackageType;
use Illuminate\Http\Request;
use App\Models\PackageCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class PackagesController extends Controller
{
    protected $isAdmin = true;
    
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        $categories = PackageCategory::all();
        return view('admin.packages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'price' => 'required',
        ]);

        Package::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'level' => $request->level?? 1,
            'level_name' => $request->level_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'features' => $request->features? json_encode($request->features): null,
        ]);

        return back()->with('success', 'New package added successfully!');
    }

    public function show()
    {
        return view('admin.packages.show');
    }

    public function edit($id)
    {
        $package = Package::find($id);
        $categories = PackageCategory::all();
        return view('admin.packages.edit', compact('package', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'price' => 'required',
        ]);

        $package = Package::find($id);
        $package->title = $request->title;
        $package->category_id = $request->category_id;
        $package->type_id = $request->type_id;
        $package->level = $request->level;
        $package->level_name = $request->level_name;
        $package->price = $request->price;
        $package->sale_price = $request->sale_price;
        $package->quantity = $request->quantity;
        $package->features = $request->features? json_encode($request->features): null;
        $package->save();

        return back()->with('success', 'Package updated successfully!');
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();

        return back()->with('success', 'Package deleted successfully!');
    }
}
