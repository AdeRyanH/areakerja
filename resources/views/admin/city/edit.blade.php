@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Update Province
    </div>
    <div class="card-body">
        <form action="/admin/cities/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="province">Province*</label>
                <select name="province" id="province" class="form-control">
                    <option value="{{ $prov->id }}">{{ $prov->province }}</option>
                    @foreach ($dataprov as $d)
                        <option value="{{ $d->id }}">{{ $d->province }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="city">City*</label>
                <input type="text" id="city" name="city" class="form-control" value="{{ $data->name }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection