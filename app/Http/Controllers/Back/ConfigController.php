<?php

namespace App\Http\Controllers\Back;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index(){
        return view('Back.config.index',[
            'config' => Config::get()
        ]);
    }
}
