<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrendingPageController extends Controller
{
    public function trendingpage (){
        return view ('trendingpage');
    }
}
