<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/dist/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/css/app.css') }}">
    <link href="{{ asset('Assets/dist/vendors/toastr/build/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/dist/vendors/sweetalert2_new/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Assets/dist/images/favicon.svg') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('partials.topbar')
                {{-- ----------------------- --}}
                @include('partials.sidebar')
            </div>
        </div>
        <div id="main">
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3">ineofio</i>
                </a>
            </header> --}}

            <div class="page-heading">
                <h3>{{ $pageTitle }}</h3>
            </div>

            <div class="page-content">
                @yield('content')
            </div>

            @include('partials.footer')
        </div>
    </div>
    <script src="{{ asset('Assets/dist/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/dist/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('Assets/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('Assets/dist/js/mazer.js') }}"></script>
    <script src="{{ asset('Assets/dist/vendors/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('Assets/dist/vendors/sweetalert2_new/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('Assets/js/help.js') }}"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });

        $('#logout').click(function (e) {
            e.preventDefault();

            Swal.fire({
                    title: "Konfirmasi Logout",
                    text: "Apakah anda yakin akan logout?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#D4A762",
                    cancelButtonColor: "#050709",
                    confirmButtonText: "Yes"
            }).then((result) => {
                    if (result.isConfirmed) {
                         // setTimeout(function(){
                         //      toastr.info('Mengalihkan...')
                         // }, 1000)

            setTimeout(function(){window.location.href = "{{ route('auth.logout') }}"}, 2000)
                    }
            });
        });
    </script>
</body>

</html>
