@extends('template')

@section('page_title', 'Reading Page')
@section('page_content')

    <!-- Dropdown -->
    <section class="mx-auto">

        <div class="d-flex read_center">
            <li class="dropdown col-3">
                <a class="font_white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/svg/chevron-down-solid.svg" alt="archive" class="dropdown_background">
                </a>

                <div class="read_center">
                    <ul class="dropdown-menu dropdown">
                        <li><a class="dropdown-item" href="/CoverDescription">
                            Chapter List:
                        </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 1
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 2
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 3
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 4
                            </a></li>
                        <li><a class="dropdown-item" href="/CoverDescription">
                                Chapter 5
                            </a></li>
                    </ul>
                </div>

            </li>
            <div class="col-md-9 font_right">
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Previous Chapter</a>
                <a href="/ReadingPage" class="btn mb-2 btn-outline-light">&raquo; Next Chapter</a>
            </div>
        </div>
    </section>
    <!-- End of Dropdown -->

    <!-- Reading -->
    <section class="py-3">

        <div class="container font_white d-flex flex-column justify-content-center align-items-center">
            <div class="header container_center">
                <h3>Story Title</h3>
                <p class="lead text-white-50 mb-6"><Small>By: Author</Small></p>
            </div>

            <p class="read_center fs-6">Chapter:</p>

            {{-- <div class="content col-5"> --}}
            <p class="read_center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
            </p>
            <p class="read_center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                facilisis.
            </p>
            {{-- </div> --}}
        </div>
        <br>

    </section>
    <!-- End of Reading -->

@endsection
