@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.jobs.update", [$job->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Nama Pekerjaan</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($job) ? $job->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('company_id') ? 'has-error' : '' }}">
                <label for="company">Nama Perusahaan</label>
                <select name="company_id" id="company" class="form-control select2" required>
                    @foreach($companies as $id => $company)
                        <option value="{{ $id }}" {{ (isset($job) && $job->company ? $job->company->id : old('company_id')) == $id ? 'selected' : '' }}>{{ $company }}</option>
                    @endforeach
                </select>
                @if($errors->has('company_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('company_id') }}
                    </em>
                @endif
            </div>

            <div class="form-group {{ $errors->has('lokasikerja') ? 'has-error' : '' }}">
                <label for="lokasikerja">Alamat Kantor</label>
                <input type="text" id="lokasikerja" name="lokasikerja" class="form-control" value="{{ old('lokasikerja', isset($job) ? $job->lokasikerja : '') }}">
                @if($errors->has('lokasikerja'))
                    <em class="invalid-feedback">
                        {{ $errors->first('lokasikerja') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.lokasikerja_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('regency_id') ? 'has-error' : '' }}">
                <label for="location">Lokasi/Kota*</label>
                <select name="regency_id" id="location" class="form-control select2" required>
                    <option value="{{ $kotasekarang->id }}" >{{ $kotasekarang->name }}</option>
                    @foreach($kota as $kota)
                        <option value="{{ $kota->id }}" >{{ $kota->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('regency_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('regency_id') }}
                    </em>
                @endif
            </div>

            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">Kecamatan</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($job) ? $job->address : '') }}">
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.address_helper') }}
                </p>
            </div>

            <div class="form-group ">
                <label for="full_description">Deskripsi Pekerjaan</label>
                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>
                @foreach($job->full_description as $hehe2)
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="inputFormRow2">
                                <div class="input-group mb-3">
                                    <input type="text" name="full_description[]" class="form-control m-input" placeholder="Masukkan Deskripsi Pekerjaan" autocomplete="off" value="{{ $hehe2 }}">
                                    <div class="input-group-append">
                                        <button id="removeRow2" type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div id="newRow2"></div>

                        </div>
                    </div>
                @endforeach
                <button id="addRow2" type="button" class="btn btn-success">Add More</button>
            </div>
            <div class="form-group">
                <label for="requirements">Syarat Pekerjaan</label>
                <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>

                @foreach($job->requirements as $hehe)
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="inputFormRow">
                                <div class="input-group mb-3">
                                    <input type="text" name="requirements[]" class="form-control m-input" placeholder="Enter title" autocomplete="off" value="{{ $hehe }}">
                                    <div class="input-group-append">
                                        <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div id="newRow"></div>

                        </div>
                    </div>
                @endforeach
                <button id="addRow" type="button" class="btn btn-success">Add More</button>

                @if($errors->has('requirements'))
                    <em class="invalid-feedback">
                        {{ $errors->first('requirements') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.requirements_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('job_nature') ? 'has-error' : '' }}">
                <label for="job_nature">Status Pekerjaan</label>
                <select name="job_nature" id="job_nature" class="form-control" required>
                    <option value="{{ old('job_nature', isset($job) ? $job->job_nature : '') }}">{{ old('job_nature', isset($job) ? $job->job_nature : '') }}</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Freelance">Freelance</option>
                </select>
                @if($errors->has('job_nature'))
                    <em class="invalid-feedback">
                        {{ $errors->first('job_nature') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.job_nature_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{ old('gender', isset($job) ? $job->gender : '') }}">{{ old('gender', isset($job) ? $job->gender : '') }}</option>
                    <option value="Pria/Wanita">Pria/Wanita</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
                @if($errors->has('gender'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.gender_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('pendidikan') ? 'has-error' : '' }}">
                <label for="pendidikan">Minimal Pendidikan</label>
                <input type="text" id="pendidikan" name="pendidikan" class="form-control" value="{{ old('pendidikan', isset($job) ? $job->pendidikan : '') }}">
                @if($errors->has('pendidikan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pendidikan') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.pendidikan_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('umur') ? 'has-error' : '' }}">
                <label for="umur">Minimal/Maksimal Umur</label>
                <input type="text" id="umur" name="umur" class="form-control" value="{{ old('umur', isset($job) ? $job->umur : '') }}">
                @if($errors->has('umur'))
                    <em class="invalid-feedback">
                        {{ $errors->first('umur') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.umur_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('bataslamaran') ? 'has-error' : '' }}">
                <label for="bataslamaran">Batas Lamaran</label>
                <input type="text" id="bataslamaran" name="bataslamaran" class="form-control" value="{{ old('bataslamaran', isset($job) ? $job->bataslamaran : '') }}">
                @if($errors->has('bataslamaran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('bataslamaran') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.bataslamaran_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <label for="categories">Kategori</label>
                <select name="categories[]" id="categories" class="form-control select2" >
                    @foreach($categories as $id => $categories)
                        <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || isset($job) && $job->categories->contains($id)) ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <em class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.categories_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('salary') ? 'has-error' : '' }}">
                <label for="salary">Gaji</label>
                <input type="text" id="salary" name="salary" class="form-control" value="{{ old('salary', isset($job) ? $job->salary : '') }}" required>
                @if($errors->has('salary'))
                    <em class="invalid-feedback">
                        {{ $errors->first('salary') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.salary_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email', isset($job) ? $job->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.email_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('notelp') ? 'has-error' : '' }}">
                <label for="notelp">Nomor Handphone</label>
                <input type="text" id="notelp" name="notelp" class="form-control" value="{{ old('notelp', isset($job) ? $job->notelp : '') }}" >
                @if($errors->has('notelp'))
                    <em class="invalid-feedback">
                        {{ $errors->first('notelp') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.notelp_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                <label for="website">Website</label>
                <input type="text" id="website" name="website" class="form-control" value="{{ old('website', isset($job) ? $job->website : '') }}" >
                @if($errors->has('website'))
                    <em class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.website_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('formulir') ? 'has-error' : '' }}">
                <label for="formulir">Formulir</label>
                <input type="text" id="formulir" name="formulir" class="form-control" value="{{ old('formulir', isset($job) ? $job->formulir : '') }}" >
                @if($errors->has('formulir'))
                    <em class="invalid-feedback">
                        {{ $errors->first('formulir') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.website_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('top_rated') ? 'has-error' : '' }}">
                <label for="top_rated">{{ trans('cruds.job.fields.top_rated') }}</label>
                <input name="top_rated" type="hidden" value="0">
                <input value="1" type="checkbox" id="top_rated" name="top_rated" {{ (isset($job) && $job->top_rated) || old('top_rated', 0) === 1 ? 'checked' : '' }}>
                @if($errors->has('top_rated'))
                    <em class="invalid-feedback">
                        {{ $errors->first('top_rated') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.top_rated_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
