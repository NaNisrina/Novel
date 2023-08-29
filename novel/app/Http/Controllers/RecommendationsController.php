<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendationsController extends Controller
{
    public function recommendations (){
        return view ('recommendations');
    }
}
