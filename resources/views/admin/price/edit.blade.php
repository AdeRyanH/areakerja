@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Price
    </div>

    <div class="card-body">
        <form action="{{ route("admin.price.update", [$price->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                <label for="deskripsi_singkat">Deskripsi Singkat</label>
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

            <div class="form-group ">
                <label for="list">list</label>
                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>
                @foreach($price->list as $hoho)
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="inputFormRow3">
                                <div class="input-group mb-3">
                                    <input type="text" name="list[]" class="form-control m-input" placeholder="" autocomplete="off" value="{{ $hoho }}">
                                    <div class="input-group-append">
                                        <button id="removeRow3" type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div id="newRow3"></div>

                        </div>
                    </div>
                @endforeach
                <button id="addRow3" type="button" class="btn btn-success">Add More</button>
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

            <div class="form-group {{ $errors->has('warna') ? 'has-error' : '' }}">
                <label for="warna">Warna</label>
                <input type="color" id="colorPicker" value="{{ old('warna', isset($price) ? $price->warna : '') }}">
                <input type="text" id="colorCode" name="warna"  class="form-control" value="{{ old('warna', isset($price) ? $price->warna : '') }}" required>
                @if($errors->has('warna'))
                    <em class="invalid-feedback">
                        {{ $errors->first('warna') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                <label for="pesan">Pesan*</label>
                <input type="text" id="pesan" name="pesan" class="form-control" value="{{ old('pesan', isset($price) ? $price->pesan : '') }}" required>
                @if($errors->has('pesan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pesan') }}
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
