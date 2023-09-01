{{-- @extends('unused.test2') --}}
@extends('template')

@section('page_title', 'Home Page')

@section('page_content')

    <!-- Header-->
    <header class="py-5">
        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-9">

                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Welcome, user</h1>
                        <p class="lead text-white-50 mb-4">Latest Update</p>

                        {{-- <div class="shadow-lg p-3 mb-5 bg-dark rounded"> --}}

                        {{-- .col-lg-9 --}}

                        <!-- Carousel -->
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="/CoverDescription">
                                        <img src="img/jpg/tru.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>
                                    <div class="carousel-caption d-md-block">
                                        <h5>Story 1</h5>
                                        <p>This is Story 1 description and synopsis.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href="/CoverDescription">
                                        <img src="img/jpg/tra.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>
                                    <div class="carousel-caption d-md-block">
                                        <h5>Story 2</h5>
                                        <p>This is Story 2 description and synopsis.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href="/CoverDescription">
                                        <img src="img/jpg/try.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>
                                    <div class="carousel-caption d-md-block">
                                        <h5>Story 3</h5>
                                        <p>This is Story 3 description and synopsis.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End of Carousel -->
                    {{-- </div> --}}

                        {{-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-outline-warning btn-lg px-4 me-sm-3" href="#features">Start Reading</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">View All</a>
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>
    </header>
    <!-- End of Header -->

    <!-- Features-->
    <section class="py-5" id="features">

        <div class="container container_center px-5 my-5">
            <div class="row gx-5 d-flex">

                <!-- Trending -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature text-white rounded-3 mb-3 logo_background">
                        <i> <img class="image_home" src="img/svg/trending.svg" alt="archive"> </i>
                    </div>
                    <h2 class="h4 fw-bolder">
                        <a class="text-decoration-none font_white" href="/TrendingPage">
                            Trending
                            <img src="img/svg/arrow-right.svg" alt="arrow-right">
                        </a>
                    </h2>
                    <p class="lead text-white-50 mb-4"> Berisi daftar-daftar cerita yang sedang Populer </p>
                </div>
                <!-- End of Your Trending -->

                <!-- Your Library -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature text-white rounded-3 mb-3 logo_background">
                        <i> <img class="image_home" src="img/svg/library.svg" alt="archive"> </i>
                    </div>
                    <h2 class="h4 fw-bolder">
                        <a class="text-decoration-none font_white" href="/YourLibrary">
                            Your Library
                            <img src="img/svg/arrow-right.svg" alt="arrow-right">
                        </a>
                    </h2>
                    <p class="lead text-white-50 mb-4"> Berisi daftar-daftar cerita yang sedang Anda baca </p>
                </div>
                <!-- End of Your Library -->

                <!-- Your Story -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature text-white rounded-3 mb-3 logo_background">
                        <i> <img class="image_home" src="img/svg/story.svg" alt="story"> </i>
                    </div>
                    <h2 class="h4 fw-bolder">
                        <a class="text-decoration-none font_white" href="/YourStory">
                            Your Story
                            <img src="img/svg/arrow-right.svg" alt="arrow-right">
                        </a>
                    </h2>
                    <p class="lead text-white-50 mb-4"> Berisi daftar-daftar cerita yang telah Anda tulis </p>
                </div>
                <!-- End of Your Story -->

            </div>
        </div>

    </section>
    <!-- End of Features -->

@endsection
