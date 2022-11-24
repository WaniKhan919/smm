<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
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
            'name' => 'required'
        ]);

        $image_url = null;
        if ($request->hasFile('image')) {
            $image_url = $request->file('image')->store('public/reviews');
            $image_url = str_replace('public/', '', $image_url);
        }

        $published = false;
        if ($request->published == "on"){
            $published = true;
        }

        Review::create([
            'name' => $request->name,
            'company' => $request->company,
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $image_url,
            'published' => $published,
        ]);

        return back()->with('success', 'New review added successfully!');
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
        $review = Review::find($id);
        return view('admin.reviews.edit', compact('review'));
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
            'name' => 'required'
        ]);

        $image_url = null;
        if ($request->hasFile('image')) {
            $image_url = $request->file('image')->store('public/reviews');
            $image_url = str_replace('public/', '', $image_url);
        }

        $published = false;
        if ($request->published == "on"){
            $published = true;
        }

        $review = Review::find($id);
        $review->name = $request->name;
        $review->company = $request->company;
        $review->title = $request->title;
        $review->description = $request->description;
        if ($image_url)
            $review->image_url = $image_url;
        $review->published = $published;
        $review->save();

        return back()->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return back()->with('success', 'Review deleted successfully!');
    }
}
