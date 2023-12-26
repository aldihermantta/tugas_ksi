@extends('layouts.admin')

@section('content')
<section class="row">
    <div class="col-12">
        @foreach ($artikel as $data)
        <a href="{{ route('artikel.edit', $data->slug) }}" class="card" style="cursor: pointer">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">{{$data->judul}}</h5>
                <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-default btn-sm"><i class="bi bi-trash-fill fs-5"></i></button>
                </form>
            </div>
            <div class="card-body d-flex">
                <img src="{{ $data->tumblr }}" alt="Deskripsi Gambar" class="img-thumbnail"
                    style="width: 145px; height: 145px; object-fit: cover">
                <div class="card-body">
                    <p class="card-text">
                        <?php $hiddenImagesContent = preg_replace('/<img[^>]+>/', '', $data->content)?>
                        {!! Str::words(strip_tags($hiddenImagesContent, 10)) !!}
                    </p>
                </div>
            </div>
        </a>

        @endforeach
    </div>
</section>
@endsection
