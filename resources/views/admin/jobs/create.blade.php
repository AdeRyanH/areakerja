@extends('layouts.admin')
@section('styles')
    @livewireStyles()
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.jobs.store") }}" method="POST" enctype="multipart/form-data" id="form-name">
            @csrf
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


            @livewire('location')


            {{-- <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                <label for="location">Lokasi/Kota*</label>
                <select name="location_id" id="location" class="form-control select2" required>
                    @foreach($locations as $id => $location)
                        <option value="{{ $id }}" {{ (isset($job) && $job->location ? $job->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('location_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('location_id') }}
                    </em>
                @endif
            </div> --}}

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

            <div class="form-group {{ $errors->has('full_description') ? 'has-error' : '' }}">
                <label for="full_description">Deskripsi Pekerjaan</label>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                    </div>

                    <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field2">
                            <tr>
                                <td><input id="full_description" name="full_description[]" type="text" placeholder="Masukkan Deskripsi Pekerjaan" class="form-control name_list" /></td>
                                <td><button type="button" name="add2" id="add2" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>
                    </div>
                <p class="helper-block">
                    {{ trans('cruds.job.fields.full_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('requirements') ? 'has-error' : '' }}">
                <label for="requirements">Syarat Pekerjaan</label>
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                    </div>

                    <div class="alert alert-success print-success-msg" style="display:none">
                    <ul></ul>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input id="requirements" name="requirements[]" type="text" placeholder="Masukkan Syarat Pekerjaan" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>
                    </div>
            </div>

            <div class="form-group {{ $errors->has('job_nature') ? 'has-error' : '' }}">
                <label for="job_nature">Status Pekerjaan</label>
                <select id="job_nature" name="job_nature"  class="form-control" required>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Freelance">Freelance</option>
                </select>
                {{-- <input type="text" id="job_nature" name="job_nature" class="form-control" value="{{ old('job_nature', isset($job) ? $job->job_nature : 'Full-time') }}"> --}}
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
                <select id="gender" name="gender"  class="form-control" required>
                    <option value="Pria/Wanita">Pria/Wanita</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
                {{-- <input type="text" id="gender" name="gender" class="form-control" value="{{ old('gender', isset($job) ? $job->gender : 'Full-time') }}"> --}}
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
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="categories[]" id="categories" class="form-control select2" multiple="multiple">
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
                <label for="salary">Gaji*</label>
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
                <label for="email">Email*</label>
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
                <label for="notelp">Nomor Handphone*</label>
                <input type="text" id="notelp" name="notelp" class="form-control" value="{{ old('notelp', isset($job) ? $job->notelp : '') }}" required>
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
                <label for="website">Website*</label>
                <input type="text" id="website" name="website" class="form-control" value="{{ old('website', isset($job) ? $job->website : '') }}" required>
                @if($errors->has('website'))
                    <em class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{-- {{ trans('cruds.job.fields.website_helper') }} --}}
                </p>
            </div>

            <div class="form-group {{ $errors->has('top_rated') ? 'has-error' : '' }}">
                <label for="top_rated">{{ trans('cruds.job.fields.top_rated') }}</label>
                <input name="top_rated" type="hidden" value="0">
                <input value="1" type="checkbox" id="top_rated" name="top_rated" {{ old('top_rated', 0) == 1 ? 'checked' : '' }}>
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
@section('scripts')
    @livewireScripts()
@endsection