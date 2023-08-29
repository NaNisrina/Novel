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
                    <li><a class="dropdown-item" href="/YourLibrary">
                            <img src="img/svg/navbar_bookmark.svg" alt="bookmark">
                            Bookmark
                        </a></li>
                    <li><a class="dropdown-item" href="/YourLibrary">
                            <img src="img/svg/navbar_star.svg" alt="star">
                            Favorite
                        </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/YourStory">
                            <img src="img/svg/navbar_story.svg" alt="story">
                            My Story
                        </a></li>
                </ul>
            </li>
        </div>
    </section>
    <!-- End of Dropdown -->

    <!-- Reading -->

    <!-- End of Reading -->

@endsection
