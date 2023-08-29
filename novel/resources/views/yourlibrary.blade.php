@extends('template')

@section('page_title', 'Library')
@section('page_content')

    <!-- Tabs -->
    <section id="tabs">
        <div class="container container_center">

            <h6 class="section-title h1">Library</h6>

            <div class="row">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <button class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href=""
                                role="tab" aria-controls="nav-home" aria-selected="true" data-bs-toggle="pill"
                                data-bs-target="#nav-home">Bookmark</button>
                            <button class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href=""
                                role="tab" aria-controls="nav-profile" aria-selected="false" data-bs-toggle="pill"
                                data-bs-target="#nav-profile">Favorite</button>
                        </div>
                    </nav>

                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                        <!-- Bookmark -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            This is your Bookmark Page

                            <!-- Story -->
                                <!-- Story Card -->
                                <div class="container container_card mt-2">
                                    <div class="profile-wrapper row">

                                        <!-- 1 -->
                                        <div class="profile">
                                            <div class="profile-image">
                                                <img src="img/jpg/tra.jpg" alt="Profile">
                                            </div>

                                            <ul class="social-icons">
                                                <li>
                                                    <a href="#" title="recommendation">
                                                        <img src="img/svg/card_heart.svg" alt="">
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" title="bookmark">
                                                        <img src="img/svg/card_bookmark.svg" alt="">
                                                    </a>
                                                </li>

                                            </ul>

                                            <div class="profile-name">
                                                <div class="profile-bio fs-5">

                                                    <div class="row">
                                                        <p class="fw-bold fs-5">Story Title 1</p>

                                                        <div class="col-6">
                                                            <p>By: Author</p>
                                                        </div>

                                                        <div class="col-6 font_right padding_button">
                                                            <a href="/CoverDescription" class="btn btn-dark">
                                                                <em>Details &raquo;</em>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of 1 -->

                                    </div>
                                </div>
                                <!-- End of Story Card -->
                            <!-- End of Story -->

                        </div>
                        <!-- End of Bookmark -->

                        <!-- Favorite -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            This is your Favorite Page
                            <!-- Story -->
                            <!-- Story Card -->
                            <div class="container container_card mt-2">
                                <div class="profile-wrapper row">

                                    <div class="profile">
                                        <div class="profile-image">
                                            <img src="img/jpg/tru.jpg" alt="Profile">
                                        </div>

                                        <ul class="social-icons">
                                            <li>
                                                <a href="#" title="recommendation">
                                                    <img src="img/svg/card_heart.svg" alt="">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" title="bookmark">
                                                    <img src="img/svg/card_bookmark.svg" alt="">
                                                </a>
                                            </li>

                                        </ul>

                                        <div class="profile-name">
                                            <div class="profile-bio fs-5">

                                                <div class="row">
                                                    <p class="fw-bold fs-5">Story Title 1</p>

                                                    <div class="col-6">
                                                        <p>By: Author</p>
                                                    </div>

                                                    <div class="col-6 font_right padding_button">
                                                        <a href="/CoverDescription" class="btn btn-dark">
                                                            <em>Details &raquo;</em>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End of Story Card -->
                            <!-- End of Story -->


                        </div>
                        <!-- End of Favorite -->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- ./Tabs -->

@endsection
