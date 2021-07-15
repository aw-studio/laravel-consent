<?php

namespace AwStudio\LaravelConsent\Components;

use Illuminate\View\Component;

class ConsentComponent extends Component
{
    public $event;

    /**
     * Create a new ConsentComponent insatnce.
     * 
     * @param string $id 
     * @return void 
     */
    public function __construct(
        public string $id,
        public ?string $script = null,
        public ?string $src = null,
        public ?string $callback = null,
        public ?bool $preselect = null,
    ) {
        $this->event = md5($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('laravel-consent::consent');
    }
}
