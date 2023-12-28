@extends('layouts.login')

@section('content')
<div class="row" style="height: 100% !important">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <h1 class="text-primary fw-bold mb-0">Alun <span class="text-dark">Alun</span> Yogyakarta </h1>
            </div>
            <h1 class="auth-title">Selamat Datang!</h1>
            <p class="auth-subtitle mb-5">Sistem Alun Alun Yogyakarta</p>
            <hr>
            <form class="form-body form-login xform" action="{{ route('auth.authenticate') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group position-relative has-icon-left mb-4 validate-username">
                    <input type="text" class="form-control form-control-xl" name="username" placeholder="Username">
                </div>

                <div class="form-group position-relative has-icon-left mb-4 validate-password">
                    <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                </div>

                <button type="submit"
                    class="btn btn-primary btn-block btn-lg shadow-lg mt-3  border-0 rounded-pill py-3 px-4 px-md-5 mb-3 animated bounceInUp">Log
                    in</button>
            </form>
        </div>
    </div>
    <div class="col-lg-7 col-12">
        <div id="auth-right">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block vh-100 w-100" src="{{ asset('Assets/login/1.png') }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block vh-100 w-100" src="{{ asset('Assets/login/2.png') }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block vh-100 w-100" src="{{ asset('Assets/login/1.png') }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block vh-100 w-100" src="{{ asset('Assets/login/2.png') }}">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // function submit_form(){
        //   // let data = $('.form-tambah').serialize();
        //   let data = new FormData($('form.form-login')[0])

        //   $.ajax({
        //           url: "{{ route('auth.authenticate') }}",
        //           type: "post",
        //           processData: false,
        //           contentType: false,
        //           data: data,
        //           beforeSend: function(){
        //                clear_form_danger();
        //           },
        //           success: function(res){

        //           },
        //           error: function(err){
        //                if(err.status == 422){
        //                Object.keys(err.responseJSON.errors).forEach(item => {
        //                     err.responseJSON.errors[item].forEach(val => {
        //                          $('.validate-'+item).addClass('has-danger');
        //                          $('.validate-'+item).find('.form-control').addClass('form-control-danger');
        //                          $('.validate-'+item).find('.form-control-feedback').text(val);
        //                     })
        //                })
        //                }
        //           }
        //      });

        //      return false;
        // }
</script>
@endsection