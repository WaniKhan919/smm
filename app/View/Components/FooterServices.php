<?php

namespace App\View\Components;

use App\Models\Package;
use App\Models\PackageType;
use Illuminate\View\Component;

class FooterServices extends Component
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
        $packages=PackageType::limit(5)->get();
        return view('components.footer-services',compact('packages'));
    }
}
