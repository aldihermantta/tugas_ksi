<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog Alun Alun Yogyakarta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary fw-bold mb-0">Alun <span class="text-dark">Alun</span>Yogyakarta </h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('home-alun-alun') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('home-alun-alun') }}#about" class="nav-item nav-link">Tentang Web Ini</a>
                        {{-- <a href="service.html" class="nav-item nav-link">Services</a> --}}
                        <a href="{{ route('halaman-informasi') }}" class="nav-item nav-link">Informasi Alun - Alun</a>
                        {{-- <a href="menu.html" class="nav-item nav-link">Menu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="book.html" class="dropdown-item">Booking</a>
                                    <a href="blog.html" class="dropdown-item">Our Blog</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> --}}
                    </div>
                    {{-- <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                    {{-- <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a> --}}
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Artikel Start -->
    <div class="container-fluid blog py-6">
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
                                <a href="{{ route('detail-informasi', $list->slug) }}"
                                    class="h5 lh-base my-auto h-100 p-3">{{ $list->judul }}</a>
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
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food
                                    from</a>
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
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food
                                    from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="{{ asset('Assets/img/blog-3.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your
                                    food from</a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Artikel End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-3 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="footer-item">
                        <h1 class="text-primary">Alun <span class="text-dark">Alun</span> Yogyakarta</h1>
                        <p class="lh-lg mb-4">Alun Alun Yogyakarta merupakan pusat kegiatan masyarakat serta menjadi
                            jantung yang menghidupkan kegiatan sehari-hari dan mengemban nilai-nilai budaya yang kaya di
                            Yogyakarta.</p>
                        {{-- <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <h4 class="mb-4">Gambar Lainnya</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-1.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-2.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-3.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-4.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-5.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('Assets/img/lingkaran-6.png') }}"
                                    class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center d-flex justify-content-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Alun
                            Alun</a>, Yogyakarta.</span>
                </div>
                {{-- <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div> --}}
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('Assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('Assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('Assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Assets/js/main.js') }}"></script>
</body>

</html>
