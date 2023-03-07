@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Province
    </div>
    <div class="card-body">
        <form action="/admin/provinces/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="province">Province*</label>
                <input type="text" id="province" name="province" class="form-control" value="{{ old('province') }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection