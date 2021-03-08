<?php

namespace Smoservice;

use Illuminate\Support\ServiceProvider;

class SmoServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadViewsFrom(__DIR__.'/../resource/views', 'Smoservice');
     }
    
    public function register(){

        $this->app->singleton(Smoservice::class);
    }
}