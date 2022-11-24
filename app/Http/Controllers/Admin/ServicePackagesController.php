<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServicePackage;
use App\Http\Controllers\Controller;

class ServicePackagesController extends Controller
{
    protected $isAdmin = true;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = ServicePackage::all();
        return view('admin.service-packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.service-packages.create', compact('services'));
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
            'title' => 'required',
            'price' => 'required',
        ]);

        ServicePackage::create([
            'title' => $request->title,
            'service_id' => $request->service_id,
            'service_package_category_id' => $request->category_id,
            'level' => $request->level ?? 1,
            'level_name' => $request->level_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'features' => $request->features ? json_encode($request->features) : null,
        ]);

        return back()->with('success', 'New package added successfully!');
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
        $package = ServicePackage::find($id);
        $services = Service::all();
        return view('admin.service-packages.edit', compact('package', 'services'));
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
            'title' => 'required',
            'price' => 'required',
        ]);

        $package = ServicePackage::find($id);
        $package->title = $request->title;
        $package->service_id = $request->service_id;
        $package->service_package_category_id = $request->category_id;
        $package->level = $request->level;
        $package->level_name = $request->level_name;
        $package->price = $request->price;
        $package->sale_price = $request->sale_price;
        $package->quantity = $request->quantity;
        $package->features = $request->features ? json_encode($request->features) : null;
        $package->save();

        return back()->with('success', 'Package updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = ServicePackage::find($id);
        $package->delete();

        return back()->with('success', 'Package deleted successfully!');
    }
}
