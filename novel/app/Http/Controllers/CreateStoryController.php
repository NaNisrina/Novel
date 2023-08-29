<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Create;
use App\Models\YourStory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateStoryController extends Controller
{
    public function create (){
        return view('create');
    }
}

    function store(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required',
            'sinopsis' => 'required|max:100',
            'yourstory' => 'required'
    ]);

    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt']= Str::limit($request->sinopsis, 100);

    Create::create($validatedData);

    return redirect('/yourstory')->with('success', 'New Post Has Been Added');
}