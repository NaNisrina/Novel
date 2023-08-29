<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignInController extends Controller
{
    public function index(){
        return view('index',[
            'title' => 'SignIn',
            'active' => 'signin'
        ]);


    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'password' => 'required|min:5|max:255',


        ]);



        User::create($validatedData);
    }
}
