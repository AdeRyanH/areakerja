@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Update Cabang
    </div>
    <div class="card-body">
        <form action="/admin/cabang/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cabang">Cabang*</label>
                <input type="text" id="cabang" name="cabang" class="form-control" value="{{ $data->cabang }}">
            </div>
            <div class="form-group">
                <label for="url">Url*</label>
                <input type="text" id="url" name="url" class="form-control" value="{{ $data->url }}">
            </div>
            <div class="form-group">
                <label for="logo">Logo*</label><br>
                <div class=""><small>logo sekarang :</small><br>
                    <img src="/img/logo_cabang/{{ $data->logo }}" alt="..." style="width: 100px; height: 70px; background-color:#272e41; padding: 2px ; border-radius: 5px ; margin-bottom: 10px"><br>
                </div>
                <input type="file" id="logo" name="logo">
                <input type="hidden" name="logo_lama" value="{{ $data->logo }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection