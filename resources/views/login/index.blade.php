@extends('layouts.login')

@section('content') 
     <div class="row"  style="height: 100% !important">
     <div class="col-lg-5 col-12">
          <div id="auth-left">
               <div class="auth-logo">
                    <a href="index.html"><img src="{{ asset('Assets/dist/images/logo/logo.png') }}" alt="Logo"></a>
               </div>
               <h1 class="auth-title">Log in.</h1>
               <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

               <form class="form-body form-login" method="POST" onsubmit="return submit_form();" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group position-relative has-icon-left mb-4 validate-username">
                         <input type="text" class="form-control form-control-xl" name="username" placeholder="Username">
                    </div>

                    <div class="form-group position-relative has-icon-left mb-4 validate-password">
                         <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
               </form>
          </div>
     </div>
     <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right" style="background-color: blue">

          </div>
     </div>
     </div>

     <script>
          function submit_form(){
            // let data = $('.form-tambah').serialize();
            let data = new FormData($('form.form-login')[0])

            $.ajax({
                    url: "",
                    type: "post",
                    processData: false,
                    contentType: false,
                    data: data,
                    beforeSend: function(){
                         clear_form_danger();
                    },
                    success: function(res){

                    },
                    error: function(err){
                         if(err.status == 422){
                         Object.keys(err.responseJSON.errors).forEach(item => {
                              err.responseJSON.errors[item].forEach(val => {
                                   $('.validate-'+item).addClass('has-danger');
                                   $('.validate-'+item).find('.form-control').addClass('form-control-danger');
                                   $('.validate-'+item).find('.form-control-feedback').text(val);
                              })
                         })
                         }
                    }
               });
            
               return false;
          }
     </script>
@endsection