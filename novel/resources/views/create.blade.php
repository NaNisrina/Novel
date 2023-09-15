@extends('template')

@section('page_title', 'Create Story')
@section('page_content')

    <section>

        <div class="container text-white">
            <h1>Create a Post</h1>
            <form method="POST" action="{{ route('posts.store') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="Select" class="form-label">Genre</label>
                    <select id="Select" class="form-select" name="genre">
                        <option value="1">Action</option>
                        <option>Fantasy</option>
                        <option>Magic</option>
                        <option>Knowledge</option>
                        <option>Poem&Poetry</option>
                        <option>Science</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">sinopsis</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">your story </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="yourstory"></textarea>
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">photo</label>
                <input class="form-control" type="file" id="formFile" name="photo" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </section>
@endsection
