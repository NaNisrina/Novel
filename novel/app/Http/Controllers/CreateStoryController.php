<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Story;
use App\Models\YourStory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateStoryController extends Controller
{
    public function create (){
        return view('create');
    }


    function store(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required',
            'sinopsis' => 'required|max:255', // max / no max? max:255
            'yourstory' => 'required',
            'photo' => 'required'
    ]);

    // $validatedData['user_id'] = auth()->user()->id;
    // $validatedData['excerpt']= Str::limit($request->sinopsis, 100);


    Story::create($validatedData);

    return redirect('/YourStory')->with('success', 'New Post Has Been Added');
}
}
