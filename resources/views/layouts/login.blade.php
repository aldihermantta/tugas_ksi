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
    
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('Assets/dist/vendors/toastr/build/toastr.min.js') }}"></script>
    <script src="{{ asset('Assets/dist/vendors/sweetalert2_new/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('Assets/js/help.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <div id="auth">
          @yield('content')
    </div>
</body>

</html>