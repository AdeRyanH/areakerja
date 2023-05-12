@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <b>Update Contact</b>
    </div>
    <div class="card-body">
        <form action="/admin/contact/update/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $contact->name }}">
            </div>
            <div class="form-group">
                <label for="contact">Contact*</label>
                <input type="text" id="contact" name="contact" class="form-control" value="{{ $contact->contact }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection