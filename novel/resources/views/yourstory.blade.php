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
                    <div class="col-lg-4 mb-4">
                        <div class="card card_body">
                            <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                            <!-- Card Header -->
                            <div class="card-header">
                                <h5 class="card-title">Story 1</h5>
                                <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body card_body" style="overflow-y: auto; height:134px">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                    dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                    dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                    dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi
                                    dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
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
                    <!-- End of Card 1 -->

                </div>
            </div>
        </section>
        <!-- End of Card Container -->

        {{-- <!-- AnotherCard -->
        <div class="container px-5 my-5">
            <div class="row gx-5">

                <div class="card me-4 d-flex justify-content-start" style="max-width: 600px;">
                    <div class="row no-gutters">

                        <div class="col-md-4">
                            <img src="img/jpg/tro.jpg" class="card-img" alt="try">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body card_body">
                                <h5 class="card-title">Story Title</h5>
                                <h5 class="card-title"><small class="text-muted">By: Author</small></h5>

                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                <a href="{{ route('EditStory') }}"
                                    class="btn btn-outline-warning btn-lg px-4 me-sm-3">Edit</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card me-4 d-flex justify-content-start" style="max-width: 600px;">
                    <div class="row no-gutters">

                        <div class="col-md-4">
                            <img src="img/jpg/tro.jpg" class="card-img" alt="try">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body card_body">
                                <h5 class="card-title">Story Title</h5>
                                <h5 class="card-title"><small class="text-muted">By: Author</small></h5>

                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> --}}

    </section>
    <!-- End of Cards -->

@endsection
