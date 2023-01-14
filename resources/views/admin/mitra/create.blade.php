@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Create User Mitra
        </div>

        <div class="card-body">
            <form action="{{ route('admin.accmitra', $mitra->id) }}" method="POST" enctype="multipart/form-data"
                id="form-name">
                @csrf
                <div class="form-group {{ $errors->has('namamitra') ? 'has-error' : '' }}">
                    <label for="namamitra">Nama Mitra</label>
                    <input type="text" id="namamitra" name="namamitra" class="form-control"
                        value="{{ old('namamitra', isset($mitra) ? $mitra->nama : '') }}" disabled required>
                    @if ($errors->has('namamitra'))
                        <em class="invalid-feedback">
                            {{ $errors->first('namamitra') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.job.fields.title_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                        value="{{ old('email', isset($mitra) ? $mitra->email : '') }}" disabled required>
                    @if ($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.job.fields.title_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            value="{{ $random }}" required>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-info" onclick="myFunction()">Show</button>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.job.fields.title_helper') }}
                    </p>
                </div>

                <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" id="alamat" name="alamat" class="form-control" value="" disabled
                        required>{{ isset($mitra) ? $mitra->alamat : '' }}</textarea>
                    @if ($errors->has('alamat'))
                        <em class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>

                <div class="form-group {{ $errors->has('no') ? 'has-error' : '' }}">
                    <label for="no">Nomor Telepon</label>
                    <textarea type="text" id="no" name="no" class="form-control" value="" disabled
                        required>{{ isset($mitra) ? $mitra->no : '' }}</textarea>
                    @if ($errors->has('no'))
                        <em class="invalid-feedback">
                            {{ $errors->first('no') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>

                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>


        </div>
    </div>
@endsection
