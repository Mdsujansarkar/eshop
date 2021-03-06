<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Brand;
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
        View::composer('frontend.parts.nav', function ($view) 
        {
            $view->with('categories', Category::where( 'publication_status', 1 )->get());
        });
        View::composer('frontend.parts.footer', function ($view) {
            $view->with('categories', Category::where('publication_status', 1)->get());
        });

        View::composer('frontend.category.categoryMenu', function ($view) {
            $view->with('categories', Category::where('publication_status', 1)->get());
        });
        View::composer('frontend.parts.footer', function ($view) {
            $view->with('brands', Brand::where('publication_status', 1)->get());
        });

    }
}
