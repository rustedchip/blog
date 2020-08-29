<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /* Comment or Remove on Deploy */
        
        $categories = App\Category::all();
        $authors = App\User::all();

        if($categories && $authors){
            View::share('categories', $categories);
            View::share('authors', $authors);
        }
    }
}
