<?php

namespace App\View\Components;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\View\Component;

class BlogSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['blog_categories']=BlogCategory::all();
        $data['blogs']=BlogPost::limit(5)->get();
        return view('components.blog-sidebar',$data);
    }
}
