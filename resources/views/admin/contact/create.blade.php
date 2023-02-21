@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Create Contact
    </div>
    <div class="card-body">
        <form action="/admin/contact/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="contact">Contact*</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ old('contact') }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection