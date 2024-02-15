<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('Back.Dashboard.index',[
            'total_article'     => Article::count(),
            'total_categories'   => Category::count(),
            'latest_article' => Article::with('Category')->whereStatus(1)->latest()->take(5)->get(),
            'popular_article' => Article::with('Category')->whereStatus(1)->orderBy('views','DESC')->take(5)->get(),
        ]);
    }
}
