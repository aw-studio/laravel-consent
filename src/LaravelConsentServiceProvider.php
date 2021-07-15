<?php

namespace AwStudio\LaravelConsent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use AwStudio\LaravelConsent\Components\ConsentComponent;
use AwStudio\LaravelConsent\Components\ConsentToggleComponent;
use AwStudio\LaravelConsent\Components\ConsentWrapperComponent;

class LaravelConsentServiceProvider extends ServiceProvider
{
    /**
     * Blade x components.
     *
     * @var array
     */
    protected $components = [
        'consent'         => ConsentComponent::class,
        'consent-wrapper' => ConsentWrapperComponent::class,
        'consent-toggle'  => ConsentToggleComponent::class,
    ];

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBladeComponents();
    }

    /**
     * Boot application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-consent');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-consent'),
        ], 'views');
    }

    /**
    * Register blade components.
    *
    * @return void
    */
    protected function registerBladeComponents()
    {
        foreach ($this->components as $name => $class) {
            Blade::component($name, $class);
        }
    }
}
