@extends('template')

@section('page_title', 'Your Story Page')

@section('page_content')

    <!-- Header-->
    <header class="py-5">
        <div class="container container_center px-5">

            <div class="row gx-5 d-flex justify-content-center">
                <div class="col-lg-6">

                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="text-center my-5">
                        <h3 class="display-7 fw-bolder text-white mb-2">My Story</h3>
                        <p class="lead text-white-50 mb-4">By: Author Me</p>
                    </div>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="/Create" class="btn btn-outline-light btn-lg px-4 me-sm-3">Create New Story</a>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <!-- End of Header -->

    <!-- Cards -->
    <section class="py-5" id="cards">

        <!-- Card Container -->
        <section id="gallery">
            <div class="container">
                <div class="row">

                    <!-- Card 1 -->
                    @foreach ($stories as $story)

                    <div class="col-lg-4 mb-4">
                        <div class="thumbnail">

                            <div class="card card_body">
                                <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                <div class="caption">

                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <h5 class="card-title crop-text-2">{{ $story->judul }}</h5>
                                        <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body card_body scroll_bar" style="height:134px">
                                        <p class="card-text">{{ $story->sinopsis }}</p>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer card_body">
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Action</a>
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Fantasy</a>
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Magic</a>

                                        <hr>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <img src="img/svg/card-eye.svg" alt="eye">1000
                                                {{-- <img src="img/svg/card-user.svg" alt="user">author --}}
                                                <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20, 2018
                                            </small>
                                        </p>
                                        <hr>

                                        <a href="#" class="btn btn-danger btn-sm">
                                            <img src="img/svg/card.svg" alt="heart">
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <img src="img/svg/bookmark.svg" alt="bookmark">
                                        </a>
                                        <a href="#/editstory" class="btn btn-warning btn-sm">
                                            <img src="img/svg/pencil.svg" alt="edit">
                                        </a>
                                        <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- End of Card 1 -->

                    <!-- Card 2 -->
                    @foreach ($stories as $story)

                    <div class="col-lg-4 mb-4">
                        <div class="thumbnail">

                            <div class="card card_body">
                                <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                <div class="caption">

                                    <!-- Card Header -->
                                    <div class="card-header">
                                        <h5 class="card-title crop-text-2">{{ $story->judul }}</h5>
                                        <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body card_body" style="height:134px">
                                        <p class="card-text crop-text-1">{{ $story->sinopsis }}</p>
                                    </div>

                                    <!-- Card Footer -->
                                    <div class="card-footer card_body">
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Action</a>
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Fantasy</a>
                                        <a href="/Genre" class="btn btn-dark genre btn-sm">Magic</a>

                                        <hr>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <img src="img/svg/card-eye.svg" alt="eye">1000
                                                {{-- <img src="img/svg/card-user.svg" alt="user">author --}}
                                                <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20, 2018
                                            </small>
                                        </p>
                                        <hr>

                                        <a href="#" class="btn btn-danger btn-sm">
                                            <img src="img/svg/card.svg" alt="heart">
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <img src="img/svg/bookmark.svg" alt="bookmark">
                                        </a>
                                        <a href="#/editstory" class="btn btn-warning btn-sm">
                                            <img src="img/svg/pencil.svg" alt="edit">
                                        </a>
                                        <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- End of Card 2 -->

                </div>
            </div>
        </section>
        <!-- End of Card Container -->

    </section>
    <!-- End of Cards -->

@endsection
