@extends('template')

@section('page_title', 'Profile Page')
@section('page_content')

    <!-- Profile2 -->
    <div class="container container_center">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card testimonial-card mt-2 mb-3">
                <div class="card-up red-gradient"></div>
                <div class="avatar mx-auto white">
                    <img src="img/png/person.png" class="rounded-circle img-fluid" alt="woman avatar">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title font-weight-bold">Username</h4>
                    <h5 class="card-title lead">Full name</h5>
                    <hr>
                    <p><i class="fas fa-quote-left"></i>
                        Your Profile Bio
                    </p>
                </div>
            </div>

        </section>
    </div>
    <!-- End of Profile2 -->

    {{-- <!-- Profile1 -->
    <div class="profile-container">
        <div class="profile-header">
            <img src="img/jpg/tra.jpg" alt="Profile Avatar">
            <h1 class="profile-username">Nama Pengguna</h1>
        </div>
        <div class="profile-content">
            <h2 class="section-title">Tentang Saya</h2>
            <p class="profile-bio">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dapibus libero a dui mattis, in mattis
                odio malesuada.
            </p>
            <h2 class="section-title">Karya Saya</h2>
            <ul class="story-list">
                <li><a href="#">Judul Cerita 1</a></li>
                <li><a href="#">Judul Cerita 2</a></li>
                <!-- Add more story links here -->
            </ul>
        </div>
    </div>
    <!-- End of Profile1 --> --}}
@endsection
