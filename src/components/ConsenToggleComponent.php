<?php

namespace AwStudio\LaravelConsent\Components;

use Illuminate\View\Component;

class ConsenToggleComponent extends Component
{
    /**
     * Create a new ConsentToggle insatnce.
     * 
     * @param string $id 
     * @return void 
     */
    public function __construct(
        public string $id,
        public string $button
    ) {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('laravel-consent::consent-toggle');
    }
}
