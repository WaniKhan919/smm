<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs=Faq::all();
        return view('admin.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
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
            'question'=>'required',
            'answer'=>'required'
        ]);
        $model=new Faq();
        $model->question=$request->question;
        $model->answer=$request->answer;
        if($model->save()){
            return redirect()->route('admin.faqs.index')->with('success','Faq added successdully');
        }else{
            return redirect()->route('admin.faqs.index')->with('error','Failed to add faq');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        $model=Faq::find($faq->id);
        $model->question=$request->question;
        $model->answer=$request->answer;
        if($model->update()){
            return redirect()->route('admin.faqs.index')->with('success','Faq updated successdully');
        }else{
            return redirect()->route('admin.faqs.index')->with('error','Failed to update faq');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        if($faq->destroy($faq->id)){
            return redirect()->route('admin.faqs.index')->with('success','Faq delete successfully!');
        }else{
            return redirect()->route('admin.faqs.index')->with('error','Failed to delete faq!');
        }
    }
}
