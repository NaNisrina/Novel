<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class YourStoryController extends Controller
{
    public function yourstory (){
        $stories = Story::all();
        return view ('yourstory', compact('stories'));
    }
}
