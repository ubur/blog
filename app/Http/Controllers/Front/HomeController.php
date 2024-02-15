<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('Front.home.index',[
            'latest_post'  => Article::with(['User','Category'])->latest()->first(),
            'articles' => Article::with('Category')->whereStatus(1)->latest()->paginate(6),
           
        ]);
    }

    public function about(){
        return view('front.home.about');
    }
}
