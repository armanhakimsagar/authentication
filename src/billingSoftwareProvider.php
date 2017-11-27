<?php

namespace arman\billing_software;

use Illuminate\Support\ServiceProvider;

class billingSoftwareProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([

                __DIR__.'/views' => base_path('resources/views'),               // dir here is src folder | base_path is where to upload
                __DIR__.'/route' => base_path('routes'),
                __DIR__.'/controller' => base_path('app/Http/controllers'),
                __DIR__.'/public' => base_path('public'),
                
            ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
