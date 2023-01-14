@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create Price
    </div>

    <div class="card-body">
        <form action="{{ route("admin.price.store") }}" method="POST" enctype="multipart/form-data" id="form-name">
            @csrf
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                <label for="nama">Nama Paket</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($price) ? $price->nama : '') }}" required>
                @if($errors->has('nama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('deskripsi_singkat') ? 'has-error' : '' }}">
                <label for="deskripsi_singkat">Deskripsi Singkat Paket</label>
                <input type="text" id="deskripsi_singkat" name="deskripsi_singkat" class="form-control" value="{{ old('deskripsi_singkat', isset($price) ? $price->deskripsi_singkat : '') }}" required>
                @if($errors->has('deskripsi_singkat'))
                    <em class="invalid-feedback">
                        {{ $errors->first('deskripsi_singkat') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('deskripsi_full') ? 'has-error' : '' }}">
                <label for="deskripsi_full">Deskripsi Full Paket</label>
                <input type="text" id="deskripsi_full" name="deskripsi_full" class="form-control" value="{{ old('deskripsi_full', isset($price) ? $price->deskripsi_full : '') }}" required>
                @if($errors->has('deskripsi_full'))
                    <em class="invalid-feedback">
                        {{ $errors->first('deskripsi_full') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('list') ? 'has-error' : '' }}">
                <label for="list">List Paket</label>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                    </div>

                    <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field3">
                            <tr>
                                <td><input id="list" name="list[]" type="text" placeholder="Masukkan List" class="form-control name_list" /></td>
                                <td><button type="button" name="add3" id="add3" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>
                    </div>
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                <label for="harga">Harga Paket</label>
                <input type="text" id="harga" name="harga" class="form-control" value="{{ old('harga', isset($price) ? $price->harga : '') }}" required>
                @if($errors->has('harga'))
                    <em class="invalid-feedback">
                        {{ $errors->first('harga') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group colorpicker colorpicker-component  {{ $errors->has('warna') ? 'has-error' : '' }}">
                <label for="warna">Warna</label>
                <input type="color" id="colorPicker" value="#ffffff">
                <input type="text" id="colorCode" name="warna"  class="form-control" value="{{ old('warna', isset($price) ? $price->warna : '') }}" required>

                  </div>
                @if($errors->has('warna'))
                    <em class="invalid-feedback">
                        {{ $errors->first('warna') }}
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
