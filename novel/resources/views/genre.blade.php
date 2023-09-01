@extends('template')

@section('page_title', 'Genre')
@section('page_content')

    <!-- Header-->
    <header class="py-5">
        <div class="container container_center px-5">

            <div class="row gx-5 d-flex justify-content-center">
                <div class="col-lg-6">

                    <div class="text-center my-5">
                        <h3 class="display-7 fw-bolder text-white mb-2">Genre</h3>
                        <p class="lead text-white-50 mb-4">Genre-Genre Story</p>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <!-- End of Header -->

    <!-- Content -->
    <section class="py-5" id="features">

        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-tabs nav-fill nav-pills me-3 border-0" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">

                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled"
                    type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>
                    <p class="lead text-white-50">Fiction</p>
                </button>
                <button class="nav-link active" id="v-pills-action-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-action" type="button" role="tab" aria-controls="v-pills-action"
                    aria-selected="true">
                    Action</button>
                <button class="nav-link" id="v-pills-fantasy-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fantasy"
                    type="button" role="tab" aria-controls="v-pills-fantasy" aria-selected="false">
                    Fantasy</button>
                <button class="nav-link" id="v-pills-romance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-romance"
                    type="button" role="tab" aria-controls="v-pills-romance" aria-selected="false">
                    Romance</button>

                <br>

                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled"
                    type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>
                    <p class="lead text-white-50">Non-Fiction</p>
                </button>
                <button class="nav-link" id="v-pills-knowledge-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-knowledge" type="button" role="tab" aria-controls="v-pills-knowledge"
                    aria-selected="false">
                    Knowledge</button>
                <button class="nav-link" id="v-pills-poem_poetry-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-poem_poetry" type="button" role="tab" aria-controls="v-pills-poem_poetry"
                    aria-selected="false">
                    Poem & Poetry</button>
                <button class="nav-link" id="v-pills-science-tab" data-bs-toggle="pill" data-bs-target="#v-pills-science"
                    type="button" role="tab" aria-controls="v-pills-science" aria-selected="false">
                    Science</button>

            </div>

            <div class="tab-content" id="v-pills-tabContent">


                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
                    tabindex="0">disabled</div>

                <!-- Action -->
                <div class="tab-pane fade show active font_white" id="v-pills-action" role="tabpanel"
                    aria-labelledby="v-pills-action-tab" tabindex="0"> This is Genre Action

                    <!-- Story -->

                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-4">
                            <div class="thumbnail">

                                <div class="card card_body">
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->

                </div>
                <!-- End of Action -->


                <!-- Fantasy -->
                <div class="tab-pane fade font_white" id="v-pills-fantasy" role="tabpanel" aria-labelledby="v-pills-fantasy-tab"
                    tabindex="0"> This is Genre Fantasy

                    <!-- Story -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-4">
                            <div class="thumbnail">

                                <div class="card card_body">
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->
                </div>
                <!-- End of Fantasy -->

                <!-- Romance -->
                <div class="tab-pane fade font_white" id="v-pills-romance" role="tabpanel" aria-labelledby="v-pills-romance-tab"
                    tabindex="0"> This is Genre Romance
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
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->
                </div>
                <!--  End of Romance -->

                <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
                    tabindex="0">disabled</div>

                <!-- Knowledge -->
                <div class="tab-pane fade font_white" id="v-pills-knowledge" role="tabpanel"
                    aria-labelledby="v-pills-knowledge-tab" tabindex="0"> This is Genre Knowledge
                    <!-- Story -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-4">
                            <div class="thumbnail">

                                <div class="card card_body">
                                    <img src="img/jpg/tro.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tro.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tro.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tro.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->
                </div>
                <!--  End of Knowledge -->

                <!-- PoemPoetry -->
                <div class="tab-pane fade font_white" id="v-pills-poem_poetry" role="tabpanel"
                    aria-labelledby="v-pills-poem_poetry-tab" tabindex="0"> This is Genre Poem&Poetry
                    <!-- Story -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-4">
                            <div class="thumbnail">

                                <div class="card card_body">
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tru.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->

                </div>
                <!--  End of PoemPoetry -->

                <!-- Science -->
                <div class="tab-pane fade font_white" id="v-pills-science" role="tabpanel" aria-labelledby="v-pills-science-tab"
                    tabindex="0"> This is Genre Science
                    <!-- Story -->
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-4">
                            <div class="thumbnail">

                                <div class="card card_body">
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body" style="height:134px">
                                            <p class="card-text crop-text-1">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
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
                                    <img src="img/jpg/tra.jpg" alt="" class="card-img-top image_card">

                                    <div class="caption">

                                        <!-- Card Header -->
                                        <div class="card-header">
                                            <h5 class="card-title crop-text-2">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.</h5>
                                            <h6 class="card-title"><small class="text-muted">By: Author</small></h6>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="card-body card_body scroll_bar" style="height:134px">
                                            <p class="card-text">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dolorem consequuntur porro, voluptas et eveniet quod, recusandae voluptatum cupiditate atque magnam vitae molestias laborum reiciendis facere. Esse ad eius error.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem itaque assumenda eum necessitatibus reprehenderit eligendi ex modi porro doloremque in, et beatae illo saepe dolores officia perferendis quis veniam sit?
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
                                            <a href="#/editstory" class="btn btn-success btn-sm">
                                                <img src="img/svg/download.svg" alt="download">
                                            </a>
                                            <a href="/CoverDescription" class="btn btn-danger btn-sm">Details &raquo;</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Card 2 -->

                    <!-- End of Story -->
                </div>
                <!--  End of Science -->

            </div>

    </section>
    <!-- End of Content -->

@endsection
