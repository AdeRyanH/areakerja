@extends('layouts.app')
@section('meta_description','mengubah username dan password')
@section('meta_keywords','reset')
@section('meta_og_description','Perbarui username dan password anda demi kenyamanan dan keamanan anda')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Perbarui username dan password anda demi kenyamanan dan keamanan anda">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <h1>
                            <div class="login-logo">
                                <a href="#">
                                    {{ trans('panel.site_title') }}
                                </a>
                            </div>
                        </h1>
                        <p class="text-muted"></p>
                        <div>
                            <input name="token" value="{{ $token }}" type="hidden">
                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" required placeholder="{{ trans('global.login_email') }}">
                                @if($errors->has('email'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </em>
                                @endif
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">
                                @if($errors->has('password'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </em>
                                @endif
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                                @if($errors->has('password_confirmation'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </em>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    {{ trans('global.reset_password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@endsection
@endsection