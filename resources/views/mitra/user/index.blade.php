@extends('layouts.mitra.app')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('mitra.user.store') }}" method="POST" enctype="multipart/form-data"
                            id="form-name">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>User Account</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $user->name }}">
                                            </div>
                                        </div>



                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ $user->email }}">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Confirm Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" class="form-control" id="confirm" name="confirm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
