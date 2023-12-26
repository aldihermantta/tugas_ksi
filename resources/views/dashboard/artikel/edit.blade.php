@extends('layouts.admin')

@section('content')
<section class="row">
    <div class="col-12">
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel"
                        value="{{ $artikel->judul }}">
                    <button class="btn btn-primary input-group-text" id="submit" type="submit">
                        Simpan
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control summernote" name="content" id="content" cols="30" rows="10"
                    placeholder="content Artikel">{{ $artikel->content }}</textarea>
            </div>
        </form>
    </div>
</section>
@endsection
