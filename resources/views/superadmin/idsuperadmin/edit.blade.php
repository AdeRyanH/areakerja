@extends('layouts.superadmin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Update SuperAdmin Password</b>
        </div>
        <div class="card-body">
            <form action="/superadmin/superadmin/update/{{ $acc->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="superadmin_password">SuperAdmin Old Password*</label>
                    <input type="password" id="superadmin_password" name="superadmin_password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="new_password">SuperAdmin New Password*</label>
                    <input type="password" id="new_password" name="new_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="new_password_confirmation">SuperAdmin New Password Confirmation*</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" >
                </div>
                <div>
                    <input class="btn btn-danger" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
