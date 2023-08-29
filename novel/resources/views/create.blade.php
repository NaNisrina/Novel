@extends('template')

@section('page_title', 'Create Story')
@section('page_content')
     <div class="container">
        <h1>Create a Post</h1>
        {{-- <!-- <form method="POST" action="{{ route('posts.store') }}"> --> --}}
            @csrf
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul">
            </div>
            <div class="mb-3">
                <label for="Select" class="form-label">Genre</label>
                <select id="Select" class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">sinopsis</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">your story  </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
