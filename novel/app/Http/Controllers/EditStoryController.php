<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editstory;


class EditStoryController extends Controller

{
    public function index(){

    $items = editstory::all();
    return view('index.blade.php', compact('items'));
    }

    public function create(){
    return view('create.blade.php');
}

    public function store(Request $request){
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
    ]);

    editstory::create($request->all());
    return redirect()->route('index.blade.php');
}

    public function edit($id){
    $item = editstory::findOrFail($id);
    return view('edit.blade.php', compact('item'));
}

    public function update(Request $request, $id){
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
    ]);

    $item = editstory::findOrFail($id);
    $item->update($request->all());

    return redirect()->route('index.blade.php');
}

    public function show($id){
    $item = editstory::findOrFail($id);
    return view('show.blade.php', compact('item'));
}

    public function destroy($id){
    editstory::destroy($id);
    return redirect()->route('index.blade.php');
}
}
