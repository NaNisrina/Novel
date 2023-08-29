@extends('template')

@section('page_title', 'Cover Detail')

@section('page_content')

    <!-- Header -->
    <header class="py-5">
        <div class="container px-5">

            <!-- Card Container -->
            <div class="container">

                <div class="card mb-3 card_body">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img align="center" src="img/jpg/tru.jpg" class="img-fluid rounded-start image_card_cover"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title font_center">Story Title</h5>
                                <h6 class="card-title font_center"><small class=""><em>By: Author</em></small></h6>

                                <div class="row">

                                    <div class="col-8">

                                        <p class="card-text">Rating:
                                            <img src="img/svg/star-fill.svg" alt="">
                                            <img src="img/svg/star-fill.svg" alt="">
                                            <img src="img/svg/star-fill.svg" alt="">
                                            <img src="img/svg/star.svg" alt="">
                                            <img src="img/svg/star.svg" alt="">
                                        </p>
                                        <p class="card-text">Status: Ongoing</p>
                                        <p class="card-text">Genre:
                                            <a href="/Genre" class="btn btn-dark genre btn-sm">Action</a>
                                            <a href="/Genre" class="btn btn-dark genre btn-sm">Fantasy</a>
                                            <a href="/Genre" class="btn btn-dark genre btn-sm">Magic</a>
                                        </p>

                                        <p class="card-text"><small class=""><em>Last updated 3 mins ago</em></small>
                                        </p>
                                    </div>

                                    <div class="col font_center">
                                        <a href="" class="btn btn-dark"><span class="span_mark">&raquo;
                                                Bookmark</span></a>
                                        <br> <br>
                                        <a href="" class="btn btn-dark"><span class="span_mark">&raquo;
                                                Favorite</span></a>

                                        {{-- <a href="" class="btn btn-dark">Favorite</a> --}}
                                        {{-- <button class="bookmark-button mb-2">Bookmark</button>
                                        <button class="favorite-button mb-2">Favorite</button> --}}
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text font_left">Synopsis</p>

                                <p class="card-text font_left">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione beatae, iste dolor quia
                                    dicta nam quo ut minima doloribus quis quasi similique, cum molestias. Est, ut itaque.
                                    A, tenetur dolorem.
                                </p>
                                <p class="card-text font_left">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione beatae, iste dolor quia
                                    dicta nam quo ut minima doloribus quis quasi similique, cum molestias. Est, ut itaque.
                                    A, tenetur dolorem.
                                </p>
                                <p class="card-text font_left">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione beatae, iste dolor quia
                                    dicta nam quo ut minima doloribus quis quasi similique, cum molestias. Est, ut itaque.
                                    A, tenetur dolorem.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End of Card Container -->

        </div>
    </header>
    <!-- End of Header -->

    <!-- Chapter -->
    <section id="tabs" class="section_body">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">

                    <div>
                        <div class="row">
                            <div class="col">
                                <p class="text-start fs-4 fw-bold font_black">Chapters</p>
                            </div>
                            <div class="col font_right">
                                <a href="/ReadingPage" class="btn btn-dark">&raquo; First Chapter</a>
                                <a href="/ReadingPage" class="btn btn-dark">&raquo; Latest Chapter</a>
                            </div>
                        </div>

                        <div class="shadow p-3 mb-5 card_body rounded">

                            <!-- Chapter1 -->
                            <div class="row">
                                <div class="col-9">
                                    <a href="/ReadingPage"
                                        class="link-dark fs-6 fw-bold link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        Chapter 1
                                    </a>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <small class="text-body-secondary justify-content-end">
                                        <em>Last updated 3 minutes ago</em>
                                    </small>
                                </div>
                            </div>
                            <hr class="hr_body">
                            <!-- End of Chapter1 -->

                            <!-- Chapter2 -->
                            <div class="row">
                                <div class="col-9">
                                    <a href="/ReadingPage"
                                        class="link-dark fs-6 fw-bold link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        Chapter 2
                                    </a>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <small class="text-body-secondary justify-content-end">
                                        <em>Last updated 4 minutes ago</em>
                                    </small>
                                </div>
                            </div>
                            <hr class="hr_body">
                            <!-- End of Chapter2 -->

                            <!-- Chapter3 -->
                            <div class="row">
                                <div class="col-9">
                                    <a href="/ReadingPage"
                                        class="link-dark fs-6 fw-bold link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        Chapter 3
                                    </a>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <small class="text-body-secondary justify-content-end">
                                        <em>Last updated 5 minutes ago</em>
                                    </small>
                                </div>
                            </div>
                            <hr class="hr_body">
                            <!-- End of Chapter3 -->

                            <!-- Chapter4 -->
                            <div class="row">
                                <div class="col-9">
                                    <a href="/ReadingPage"
                                        class="link-dark fs-6 fw-bold link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        Chapter 4
                                    </a>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <small class="text-body-secondary justify-content-end">
                                        <em>Last updated 6 minutes ago</em>
                                    </small>
                                </div>
                            </div>
                            <hr class="hr_body">
                            <!-- End of Chapter4 -->

                            <!-- Chapter5 -->
                            <div class="row">
                                <div class="col-9">
                                    <a href="/ReadingPage"
                                        class="link-dark fs-6 fw-bold link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        Chapter 5
                                    </a>
                                </div>

                                <div class="col d-flex justify-content-end">
                                    <small class="text-body-secondary justify-content-end">
                                        <em>Last updated 7 minutes ago</em>
                                    </small>
                                </div>
                            </div>
                            <hr class="hr_body">
                            <!-- End of Chapter5 -->

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- End of Chapter -->

@endsection
