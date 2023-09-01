@extends('template')

@section('page_title', 'Recommendations Page')
@section('page_content')
    <!-- Tabs -->
    <section id="tabs">
        <div class="container container_center">

            <h6 class="section-title h1">For You Only</h6>

            <div class="row">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <button class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href=""
                                role="tab" aria-controls="nav-home" aria-selected="true" data-bs-toggle="pill"
                                data-bs-target="#nav-home">Recommendations</button>
                        </div>
                    </nav>

                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                        <!-- Bookmark -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            This is your Recommendation Page
                            <!-- Story -->
                            <div class="row">
                                <!-- Card 1 -->
                                <div class="col-lg-4 mb-4">
                                    <div class="thumbnail">

                                        <div class="card card_body">
                                            <img src="img/jpg/tre.jpg" alt="" class="card-img-top image_card">

                                            <div class="caption">

                                                <!-- Card Header -->
                                                <div class="card-header">
                                                    <h5 class="card-title crop-text-2">It is a long established fact that a
                                                        reader will be
                                                        distracted by the readable content of a page when looking at its
                                                        layout.</h5>
                                                    <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                                </div>

                                                <!-- Card Body -->
                                                <div class="card-body card_body" style="height:134px">
                                                    <p class="card-text crop-text-1">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                                        dolorem consequuntur porro, voluptas et eveniet quod, recusandae
                                                        voluptatum cupiditate atque magnam vitae molestias laborum
                                                        reiciendis facere. Esse ad eius error.
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                                        itaque assumenda eum necessitatibus reprehenderit eligendi ex modi
                                                        porro doloremque in, et beatae illo saepe dolores officia
                                                        perferendis quis veniam sit?
                                                    </p>
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
                                                            <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20,
                                                            2018
                                                        </small>
                                                    </p>
                                                    <hr>

                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <img src="img/svg/card.svg" alt="heart">
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        <img src="img/svg/bookmark.svg" alt="bookmark">
                                                    </a>
                                                    <a href="#/editstory" class="btn btn-success btn-sm">
                                                        <img src="img/svg/download.svg" alt="download">
                                                    </a>
                                                    <a href="/CoverDescription" class="btn btn-danger btn-sm">Details
                                                        &raquo;</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End of Card 1 -->

                                <!-- Card 1 -->
                                <div class="col-lg-4 mb-4">
                                    <div class="thumbnail">

                                        <div class="card card_body">
                                            <img src="img/jpg/tre.jpg" alt="" class="card-img-top image_card">

                                            <div class="caption">

                                                <!-- Card Header -->
                                                <div class="card-header">
                                                    <h5 class="card-title crop-text-2">It is a long established fact that a
                                                        reader will be
                                                        distracted by the readable content of a page when looking at its
                                                        layout.</h5>
                                                    <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                                </div>

                                                <!-- Card Body -->
                                                <div class="card-body card_body" style="height:134px">
                                                    <p class="card-text crop-text-1">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                                        dolorem consequuntur porro, voluptas et eveniet quod, recusandae
                                                        voluptatum cupiditate atque magnam vitae molestias laborum
                                                        reiciendis facere. Esse ad eius error.
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                                        itaque assumenda eum necessitatibus reprehenderit eligendi ex modi
                                                        porro doloremque in, et beatae illo saepe dolores officia
                                                        perferendis quis veniam sit?
                                                    </p>
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
                                                            <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20,
                                                            2018
                                                        </small>
                                                    </p>
                                                    <hr>

                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <img src="img/svg/card.svg" alt="heart">
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        <img src="img/svg/bookmark.svg" alt="bookmark">
                                                    </a>
                                                    <a href="#/editstory" class="btn btn-success btn-sm">
                                                        <img src="img/svg/download.svg" alt="download">
                                                    </a>
                                                    <a href="/CoverDescription" class="btn btn-danger btn-sm">Details
                                                        &raquo;</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End of Card 1 -->

                                <!-- Card 1 -->
                                <div class="col-lg-4 mb-4">
                                    <div class="thumbnail">

                                        <div class="card card_body">
                                            <img src="img/jpg/tre.jpg" alt="" class="card-img-top image_card">

                                            <div class="caption">

                                                <!-- Card Header -->
                                                <div class="card-header">
                                                    <h5 class="card-title crop-text-2">It is a long established fact that a
                                                        reader will be
                                                        distracted by the readable content of a page when looking at its
                                                        layout.</h5>
                                                    <h6 class="card-title"><small class="text-muted">By: Author</small>
                                                    </h6>
                                                </div>

                                                <!-- Card Body -->
                                                <div class="card-body card_body" style="height:134px">
                                                    <p class="card-text crop-text-1">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                                        dolorem consequuntur porro, voluptas et eveniet quod, recusandae
                                                        voluptatum cupiditate atque magnam vitae molestias laborum
                                                        reiciendis facere. Esse ad eius error.
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                                        itaque assumenda eum necessitatibus reprehenderit eligendi ex modi
                                                        porro doloremque in, et beatae illo saepe dolores officia
                                                        perferendis quis veniam sit?
                                                    </p>
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
                                                            <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20,
                                                            2018
                                                        </small>
                                                    </p>
                                                    <hr>

                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <img src="img/svg/card.svg" alt="heart">
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        <img src="img/svg/bookmark.svg" alt="bookmark">
                                                    </a>
                                                    <a href="#/editstory" class="btn btn-success btn-sm">
                                                        <img src="img/svg/download.svg" alt="download">
                                                    </a>
                                                    <a href="/CoverDescription" class="btn btn-danger btn-sm">Details
                                                        &raquo;</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End of Card 1 -->

                                <!-- Card 2 -->
                                <div class="col-lg-4 mb-4">
                                    <div class="thumbnail">

                                        <div class="card card_body">
                                            <img src="img/jpg/tre.jpg" alt="" class="card-img-top image_card">

                                            <div class="caption">

                                                <!-- Card Header -->
                                                <div class="card-header">
                                                    <h5 class="card-title crop-text-2">It is a long established fact that a
                                                        reader will be
                                                        distracted by the readable content of a page when looking at its
                                                        layout.</h5>
                                                    <h6 class="card-title"><small class="text-muted">By: Author</small>
                                                    </h6>
                                                </div>

                                                <!-- Card Body -->
                                                <div class="card-body card_body scroll_bar" style="height:134px">
                                                    <p class="card-text">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores
                                                        dolorem consequuntur porro, voluptas et eveniet quod, recusandae
                                                        voluptatum cupiditate atque magnam vitae molestias laborum
                                                        reiciendis facere. Esse ad eius error.
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                                                        itaque assumenda eum necessitatibus reprehenderit eligendi ex modi
                                                        porro doloremque in, et beatae illo saepe dolores officia
                                                        perferendis quis veniam sit?
                                                    </p>
                                                </div>

                                                <!-- Card Footer -->
                                                <div class="card-footer card_body">
                                                    <a href="/Genre" class="btn btn-dark genre btn-sm">Action</a>
                                                    <a href="/Genre" class="btn btn-dark genre btn-sm">Fantasy</a>
                                                    <a href="/Genre" class="btn btn-dark genre btn-sm">Magic</a>

                                                    <hr>
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            <img src="img/svg/card-eye.svg" alt="eye">2000
                                                            {{-- <img src="img/svg/card-user.svg" alt="user">author --}}
                                                            <img src="img/svg/card-calendar.svg" alt="calendar"> Jan 20,
                                                            2018
                                                        </small>
                                                    </p>
                                                    <hr>

                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        <img src="img/svg/card.svg" alt="heart">
                                                    </a>
                                                    <a href="#" class="btn btn-primary btn-sm">
                                                        <img src="img/svg/bookmark.svg" alt="bookmark">
                                                    </a>
                                                    <a href="#/editstory" class="btn btn-success btn-sm">
                                                        <img src="img/svg/download.svg" alt="download">
                                                    </a>
                                                    <a href="/CoverDescription" class="btn btn-danger btn-sm">Details
                                                        &raquo;</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End of Card 2 -->
                            <!-- End of Story -->
                        </div>
                        <!-- End of Bookmark -->
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ./Tabs -->
@endsection
