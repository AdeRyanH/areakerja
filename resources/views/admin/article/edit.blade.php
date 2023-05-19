@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            <b>Article Edit</b>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.article.update", [$article->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul', isset($article) ? $article->judul : '') }}">
            </div>
            <div class="form-group">
                <label>Ringkasan</label>
                <textarea class="form-control" name="ringkasan" id="ringkasan">{{ old('ringkasan', isset($article) ? $article->ringkasan : '') }}</textarea>
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea class="form-control" name="content" id="content">{{ old('content', isset($article) ? $article->content : '') }}</textarea>
            </div>
            <div class="form-group">
                <label>Thumbnail</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>

        </form>

    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script >
  CKEDITOR.replace( 'content' );

</script>
@endsection
