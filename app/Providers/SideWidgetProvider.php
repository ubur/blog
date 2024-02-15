<?php

namespace App\Providers;


use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;


class SideWidgetProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('front.layouts.sidewidget',function($view) {
            // $category = Category::latest()->get();
            $category = Category::withCount(['Articles' => function (Builder $query){
                $query->where('status',1);
            }])->latest()->get();
            
            $view->with('categories', $category);
        });
        

        View::composer('front.layouts.sidewidget',function($view) {
            $posts = Article::orderBy('views','desc')->take(3)->get();        
            $view->with('populer_posts', $posts);
        });


        View::composer('front.layouts.navbar',function($view) {
            $category = Category::latest()->take(3)->get();        
            $view->with('categori_navbar', $category);
        });
    }
}
