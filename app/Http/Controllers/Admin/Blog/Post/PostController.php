<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory as Category;
use App\Models\BlogPost as Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.dashboard.blog.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.dashboard.blog.post.add', compact('categories'));
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
            'description' => 'required',
            'category' => 'required',
        ]);

        if($request->hasFile('image')){
            $img = rand(1000, 9000) . '-' . time() . '-' . rand(231331, 367273) . '.' . $request->image->extension();
            $request->image->move(public_path('assets/admin/img/post'), $img);
        }else{
            $img = "";
        }

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'blog_category_id' => $request->category,
            'img' => $img,
        ]);

        if($post){
            return back()->with(session()->flash('alert', 'Post Successfully Added.'));
        }else{
            return back();
        }
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
        $post = Post::find($id);
        $categories = Category::all();

        return view('admin.dashboard.blog.post.edit', compact('id','post' , 'categories'));
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
            'description' => 'required',
            'category' => 'required',
        ]);

        $post = Post::find($id);

        if($request->hasFile('image')){
            $img = rand(1000, 9000) . '-' . time() . '-' . rand(231331, 367273) . '.' . $request->image->extension();
            $request->image->move(public_path('assets/admin/img/post'), $img);
        }else{
            $img = $post->img;
        }

        if($post){
            $post = $post->update([
                'title' => $request->title,
                'description' => $request->description,
                'blog_category_id' => $request->category,
                'img' => $img,
            ]);

            if($post){
                return back()->with(session()->flash('alert', 'Post Successfully Edited.'));
            }else{
                return back();
            }
        }else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
