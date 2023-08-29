<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourStoryController extends Controller
{
    public function yourstory (){
        $story = "p";
        return view ('yourstory', compact('story'));
    }
}
