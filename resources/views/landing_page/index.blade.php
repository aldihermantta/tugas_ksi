@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Selamat
                        Datang Di Web </small>
                    <h1 class="display-1 mb-4 animated bounceInDown">Alun <span
                            class="text-primary">Alun</span>Yogyakarta</h1>
                    {{-- <a href="javascript:void(0)"
                        class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 mb-3 animated bounceInLeft">Team
                        Penulis Kami</a> --}}
                    <a href="#penulis"
                        class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 mb-3 animated bounceInUp">Team Penulis Kami</a>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('Assets/img/home_image.png') }}" class="img-fluid rounded animated zoomIn"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Satrt -->
    <div class="container-fluid py-6" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('Assets/img/about_alun_alun.png') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <small
                        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Tentang
                        Web Ini</small>
                    <h1 class="display-5 mb-4">Alun Alun Yogyakarta</h1>
                    <p class="mb-4">Web ini berisi sistem informasi tentang Alun-Alun Yogyakarta.Dari sistem informasi
                        ini diharapkan dapat membantu wisatawan dan penduduk setempat untuk mendapatkan informasi yang
                        berguna, seperti jadwal acara dan fasilitas yang tersedia, untuk memudahkan perencanaan
                        kunjungan atau kegiatan di Alun-alun Yogyakarta</p>
                    <div class="row g-4 text-dark mb-5">
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Aktivitas Alkid Pagi
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Aktivitas Alkid Malam
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Informasi Parkir Motor
                        </div>
                        <div class="col-sm-6">
                            <i class="fas fa-share text-primary me-2"></i>Informasi Parkir Mobil
                        </div>
                    </div>
                    <a href="#blog_info" class="btn btn-primary py-3 px-5 rounded-pill">Lihat Selebihnya<i
                            class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Events Start -->
    <div class="container-fluid event py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Album
                    Alun Alun</small>
                <h1 class="display-5 mb-5">Berikut Ini Sekumpulan Foto Yang Kami Ambil Di Alun Alun Yogyakarta Pada
                    Malam Hari</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp"
                    data-wow-delay="0.1s">
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 250px;">ALUN - ALUN KIDUL</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 250px;">ALUN - ALUN UTARA</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/alkid-1.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Tempat Mewarnai</h4>
                                                <a href="{{ asset('Assets/img/alkid-1.png') }}" data-lightbox="alkid-1"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/alkid-2.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Kuliner Malam</h4>
                                                <a href="{{ asset('Assets/img/alkid-2.png') }}" data-lightbox="alkid-2"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/alkid-3.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Orang Mewarnai</h4>
                                                <a href="{{ asset('Assets/img/alkid-3.png') }}" data-lightbox="alkid-3"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.7s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/alkid-4.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Mobil Goes</h4>
                                                <a href="{{ asset('Assets/img/alkid-4.png') }}" data-lightbox="alkid-4"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/alkid-5.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Masangin</h4>
                                                <a href="{{ asset('Assets/img/alkid-5.png') }}" data-lightbox="alkid-5"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/about_alun_alun.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Suasana Alkid</h4>
                                                <a href="{{ asset('Assets/img/about_alun_alun.png') }}"
                                                    data-lightbox="about_alun_alun" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/altar-1.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Petunjuk Jalan</h4>
                                                <a href="{{ asset('Assets/img/altar-1.png') }}" data-lightbox="altar-1"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/altar-2.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Lapangan Altar</h4>
                                                <a href="{{ asset('Assets/img/altar-2.png') }}" data-lightbox="altar-2"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('Assets/img/altar-3.png') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Suasana Sekitar</h4>
                                                <a href="{{ asset('Assets/img/altar-3.png') }}" data-lightbox="altar-3"
                                                    class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-6" id="blog_info">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Artikel</small>
                <h1 class="display-5 mb-5">Informasi Alun Alun</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                @forelse ($artikel as $list)
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ $list->tumblr }}" class="img-fluid w-100" alt="thumbnail_artikel">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            {{-- <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">Sep</p>
                                </div>
                            </div> --}}
                            <a href="{{ route('detail-informasi', $list->slug) }}" class="h5 lh-base my-auto h-100 p-3">{{
                                $list->judul }}</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('Assets/img/blog-1.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">Sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('Assets/img/blog-2.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">Sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('Assets/img/blog-3.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <p class="fw-bold mb-0">16</p>
                                    <p class="fw-bold mb-0">Sep</p>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Team Start -->
    <div class="container-fluid team py-6" id="penulis">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Team
                    Penulis Kami</small>
                <h1 class="display-5 mb-5">Lokasi Foto Bersama</h1>
            </div>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-lg-5 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="{{ asset('Assets/img/team-tugas-1.png') }}" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">LOKASI</h4>
                            <p class="text-white mb-0">ALUN - ALUN KIDUL</p>
                        </div>
                        {{-- <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="{{ asset('Assets/img/team-tugas-2.png') }}" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">LOKASI</h4>
                            <p class="text-white mb-0">ALUN - ALUN KIDUL</p>
                        </div>
                        {{-- <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection