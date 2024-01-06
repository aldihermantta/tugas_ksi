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
                    <a href="#about" class="nav-item nav-link">Tentang Web Ini</a>
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
                    {{-- <a href="contact.html" class="nav-item nav-link">Kontak</a> --}}
                </div>
                {{-- <button
                    class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
                {{-- <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                --}}
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
