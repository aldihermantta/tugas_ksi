<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/dist/css/pages/auth.css') }}">
    <link href="{{ asset('Assets/dist/vendors/toastr/build/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/dist/vendors/sweetalert2_new/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <style>
        .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            background: rgb(0 0 0 / 31%);
        }

        .carousel-item {
            position: relative;
            display: none;
            width: auto;
            float: left;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform .6s ease-in-out;
            height: 100vh;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('Assets/dist/vendors/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('Assets/dist/vendors/sweetalert2_new/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('Assets/js/help.js') }}"></script>
    <script src="{{ asset('Assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <div id="auth">
          @yield('content')
    </div>
</body>

</html>