<?php

namespace AwStudio\LaravelConsent\Components;

use Illuminate\View\Component;

class ConsentWrapperComponent extends Component
{

    /**
     * Create a new ConsentWrapperComponent insatnce.
     * 
     * @param string $id 
     * @return void 
     */
    public function __construct() {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('laravel-consent::consent-wrapper');
    }
}
