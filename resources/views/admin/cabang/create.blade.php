@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Cabang
    </div>
    <div class="card-body">
        <form action="/admin/cabang/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cabang">Cabang*</label>
                <input type="text" id="cabang" name="cabang" class="form-control" value="{{ old('cabang') }}">
            </div>
            <div class="form-group">
                <label for="url">Url*</label>
                <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}">
            </div>
            <div class="form-group">
                <label for="logo">Logo*</label><br>
                <input type="file" id="logo" name="logo">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection