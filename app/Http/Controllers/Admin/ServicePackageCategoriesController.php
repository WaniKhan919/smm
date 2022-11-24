<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServicePackageCategory;

class ServicePackageCategoriesController extends Controller
{
    protected $isAdmin = true;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ServicePackageCategory::all();
        return view('admin.service-package-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.service-package-categories.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'service_id' => 'required'
        ]);

        ServicePackageCategory::create([
            'name' => $request->name,
            'service_id' => $request->service_id,
        ]);

        return back()->with('success', 'New category added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ServicePackageCategory::find($id);
        $services = Service::all();
        return view('admin.service-package-categories.edit', compact('category', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'service_id' => 'required'
        ]);

        $category = ServicePackageCategory::find($id);
        $category->name = $request->name;
        $category->service_id = $request->service_id;
        $category->save();

        return back()->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ServicePackageCategory::find($id);
        $category->delete();

        return back()->with('success', 'Category deleted successfully!');
    }

    public function getCategoriesJSON($service_id)
    {
        $categories = ServicePackageCategory::where('service_id', $service_id)->get();
        return $categories;
    }
}
