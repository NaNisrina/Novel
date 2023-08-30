<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('page_title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/mode.css" />
    <link rel="stylesheet" href="css/searchbar.css" />
    <link rel="stylesheet" href="css/card.css" />

    <!-- Bootstrap icons-->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" /> --}}

</head>

<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar_top">
        <div class="container container_center px-5">

            <!-- Logo -->
            {{-- <a class="navbar-brand" href="/HomePage">
                N
                <img src="img/svg/heart.svg" class="logo">
                veria
            </a> --}}
            <!-- End of Logo -->

            <!-- Profile Dropdown -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="navbar-brand" href="/ProfilePage" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="img/png/person.png" alt="try" width="40" height="40" class="rounded-circle profile_center">
                    </a>
                    <ul class="dropdown-menu dropdown">

                        <li><a class="dropdown-item" href="/ProfilePage">
                                <img src="img/svg/person.svg">
                                Go To Profile
                        </a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="/Setting">
                                <img src="img/svg/setting.svg" alt="settings">
                                Settings
                        </a></li>

                        <li><a class="dropdown-item" href="/">
                                <img src="img/svg/box-arrow-left.svg" alt="exit">
                                Log Out
                        </a></li>
                    </ul>
                </li>
            </ul>
            <!-- End of Profile Dropdown -->

            <!-- More Tabs -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End of More Tabs -->

            <!-- Left -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/HomePage">
                            <img src="img/svg/heart.svg" alt="homepage">
                            Home
                        </a>
                    </li>

                    <!-- Dropdown 1 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="img/svg/navbar_archive.svg" alt="archive">
                            Library
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
                    <!-- End of Dropdown 1 -->

                    <!-- Dropdown 2 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="img/svg/navbar_book.svg" alt="book">
                            Stories
                        </a>

                        <ul class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">

                            <!-- Genre Submenu -->
                            <li><a class="dropdown-item" href="/Genre">
                                    <img src="img/svg/three-dots-vertical.svg" alt="dots">
                                    Genre &raquo;
                                    <!-- Dropdown Submenu -->
                                    <ul class="dropdown-menu dropdown-submenu dropdown-submenu-left">
                                        <li>
                                            <a class="dropdown-item" href="/Genre">Fiction &raquo;</a>

                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Fantasy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Romance</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="/Genre">Non-Fiction &raquo;</a>

                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Knowledge</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Poem & Poetry</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="/Genre">Science</a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- End of Dropdown Submenu -->
                                </a></li>
                                <!-- End of Genre Submenu -->

                            <li><a class="dropdown-item" href="/TrendingPage">
                                    <img src="img/svg/navbar_trending.svg" alt="trending">
                                    Trending
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/Recommendations">
                                    <img src="img/svg/navbar_recommendation.svg" alt="recommendation">
                                    Recommendation
                                </a></li>

                        </ul>
                    </li>
                    <!-- End of Dropdown 2 -->

                </ul>

                <!-- End of Left -->

                <!-- Search -->
                {{-- <div class="input-container">
                    <input type="text" name="text" class="input" placeholder="search">
                    <span class="icon">
                      <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        </svg>
                    </span>
                  </div> --}}
                <ul class="nav mx-auto">
                    <form class="d-flex mx-sm-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit">
                            <img src="img/svg/search.svg" alt="search">
                        </button>
                    </form>
                </ul>
                <!-- End of Search -->

                <!-- dlmode -->
                <input type="checkbox" id="darkmode-toggle" />
                <label for="darkmode-toggle" class="d-flex mx-sm-auto me-5">
                    {{-- <svg version="1.1" class="sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">

                        <rect x="152.994" y="58.921" transform="matrix(0.3827 0.9239 -0.9239 0.3827 168.6176 -118.5145)" width="40.001" height="16" />
                        <rect x="46.9" y="164.979" transform="matrix(0.9239 0.3827 -0.3827 0.9239 71.29 -12.4346)" width="40.001" height="16" />
                        <rect x="46.947" y="315.048" transform="matrix(0.9239 -0.3827 0.3827 0.9239 -118.531 50.2116)" width="40.001" height="16" />

                        <rect x="164.966" y="409.112" transform="matrix(-0.9238 -0.3828 0.3828 -0.9238 168.4872 891.7491)" width="16" height="39.999" />

                        <rect x="303.031" y="421.036" transform="matrix(-0.3827 -0.9239 0.9239 -0.3827 50.2758 891.6655)" width="40.001" height="16" />

                        <rect x="409.088" y="315.018" transform="matrix(-0.9239 -0.3827 0.3827 -0.9239 701.898 785.6559)" width="40.001" height="16" />

                        <rect x="409.054" y="165.011" transform="matrix(-0.9239 0.3827 -0.3827 -0.9239 891.6585 168.6574)" width="40.001" height="16" />
                        <rect x="315.001" y="46.895" transform="matrix(0.9238 0.3828 -0.3828 0.9238 50.212 -118.5529)" width="16" height="39.999" />
                        <path d="M248,88c-88.224,0-160,71.776-160,160s71.776,160,160,160s160-71.776,160-160S336.224,88,248,88z M248,392
                                c-79.4,0-144-64.6-144-144s64.6-144,144-144s144,64.6,144,144S327.4,392,248,392z" />
                        <rect x="240" width="16" height="72" />
                        <rect x="62.097" y="90.096" transform="matrix(0.7071 0.7071 -0.7071 0.7071 98.0963 -40.6334)" width="71.999" height="16" />
                        <rect y="240" width="72" height="16" />

                        <rect x="90.091" y="361.915" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 -113.9157 748.643)" width="16" height="71.999" />
                        <rect x="240" y="424" width="16" height="72" />

                        <rect x="361.881" y="389.915" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 397.8562 960.6281)" width="71.999" height="16" />
                        <rect x="424" y="240" width="72" height="16" />
                        <rect x="389.911" y="62.091" transform="matrix(0.7071 0.7071 -0.7071 0.7071 185.9067 -252.6357)" width="16" height="71.999" />
                    </svg>
                    <svg version="1.1" class="moon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 49.739 49.739" style="enable-background:new 0 0 49.739 49.739;" xml:space="preserve">
                        <path d="M25.068,48.889c-9.173,0-18.017-5.06-22.396-13.804C-3.373,23.008,1.164,8.467,13.003,1.979l2.061-1.129l-0.615,2.268
                       c-1.479,5.459-0.899,11.25,1.633,16.306c2.75,5.493,7.476,9.587,13.305,11.526c5.831,1.939,12.065,1.492,17.559-1.258v0
                       c0.25-0.125,0.492-0.258,0.734-0.391l2.061-1.13l-0.585,2.252c-1.863,6.873-6.577,12.639-12.933,15.822
                       C32.639,48.039,28.825,48.888,25.068,48.889z M12.002,4.936c-9.413,6.428-12.756,18.837-7.54,29.253
                       c5.678,11.34,19.522,15.945,30.864,10.268c5.154-2.582,9.136-7.012,11.181-12.357c-5.632,2.427-11.882,2.702-17.752,0.748
                       c-6.337-2.108-11.473-6.557-14.463-12.528C11.899,15.541,11.11,10.16,12.002,4.936z" />
                    </svg> --}}
                </label>
                <!-- End of dlmode -->
            </div>

        </div>
    </nav>
    <!-- End of Navbar -->

    @yield('page_content')

    <!-- Footer-->
    <footer class="py-5">
        <div class="container container_center px-5">
            <p class="m-0 text-center text-white">
                &copy; N
                <img src="img/svg/heart.svg" alt="o">
                veria 2023</p>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Core theme JS-->
    <script src="{{ asset ('js/scripts.js') }}"></script>
    <script src="{{ asset ('js/card.js') }}"></script>

    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    {{-- <script src="js/bootstrap.min.js"></script> --}}

    <!-- Bootstrap core JS-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
</body>

</html>
