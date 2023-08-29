<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadingPageController extends Controller
{
    public function readingpage(){
        return view('readingpage');
    }
}
