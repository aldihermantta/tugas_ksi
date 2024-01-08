
@extends('layouts.app')

@section('content')

    <!-- Artikel Content Start -->
    <div class="container-fluid blog py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-3">
                    <a href="{{ route('halaman-informasi') }}" class="fs-5 text-primary" style="text-decoration: none;">
                        <i class="bi bi-arrow-bar-left"></i> Kembali
                    </a>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <img src="{{ $artikel->tumblr }}" class="img-fluid" alt="">
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center lh-base my-auto p-3">{{ $artikel->judul }}</h4>
                    {!! $artikel->content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Artikel Content End -->
@endsection
