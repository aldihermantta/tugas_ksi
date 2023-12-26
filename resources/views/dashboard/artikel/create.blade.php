@extends('layouts.admin')

@section('content')
<section class="row">
    <div class="col-12">
        <form action="{{ route('artikel.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel">
                    <button class="btn btn-primary input-group-text" id="submit" type="submit">
                        Simpan
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control summernote" name="content" id="content" cols="30" rows="10"
                    placeholder="content Artikel"></textarea>
            </div>
        </form>
    </div>
</section>
@endsection
