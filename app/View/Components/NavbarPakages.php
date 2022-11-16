<?php

namespace App\View\Components;

use App\Models\Package as ModelsPackage;
use Illuminate\View\Component;

class NavbarPakages extends Component
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
        $data['pakages']=ModelsPackage::all();
        return view('components.navbar-pakages',$data);
    }
}
