<?php

namespace Zems\LibraryWeb;

use Illuminate\Support\ServiceProvider;

class LibraryWebProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
        $this->app->singleton(LibraryWeb::class, function(){
            return new LibraryWeb();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd("Hi from Zems Package");
    }
}
