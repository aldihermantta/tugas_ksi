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
     <link rel="shortcut icon" href="{{ asset('Assets/dist/images/favicon.svg') }}" type="image/x-icon">
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
               <h3>Profile Statistics</h3>
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="{{ asset('Assets/js/help.js') }}"></script>
</body>

</html>
