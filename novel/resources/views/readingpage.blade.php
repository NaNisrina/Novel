@extends('template')

@section('page_title', 'Reading Page')
@section('page_content')

    <!-- Dropdown -->
    <section>

        <div class="container">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font_white" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/svg/dropdown1.svg" alt="archive" class="">
                </a>
                <ul class="dropdown-menu dropdown">
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
            </li>
        </div>
    </section>
    <!-- End of Dropdown -->

    <!-- Reading -->
        <div class="container">
            <div class="header">
                <h1>Judul Cerita</h1>
                <p>Oleh: Penulis</p>
            </div>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lacus vel odio auctor faucibus.
                    Sed ut elit ut nunc bibendum cursus. Sed vehicula dui id orci condimentum, in varius justo egestas.
                    Vivamus nec est at justo blandit pharetra. Nam dignissim nisi vitae quam ultrices, ac fermentum purus
                    facilisis.
                </p>
                <!-- Lanjutkan dengan bagian cerita selanjutnya -->
            </div>
        </div>
    <!-- End of Reading -->

@endsection
