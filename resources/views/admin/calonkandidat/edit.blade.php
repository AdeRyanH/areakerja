@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Create User Kandidat
        </div>

        <div class="card-body">
            <form action="{{ route('admin.kandidat.acc', $kandidat->id) }}" method="POST" enctype="multipart/form-data"
                id="form-name">
                @csrf
                <div class="form-group {{ $errors->has('namalengkap') ? 'has-error' : '' }}">
                    <label for="namalengkap">Nama Kandidat</label>
                    <input type="text" id="namalengkap" name="namalengkap" class="form-control"
                        value="{{ old('namalengkap', isset($kandidat) ? $kandidat->namalengkap : '') }}" required>
                    @if ($errors->has('namalengkap'))
                        <em class="invalid-feedback">
                            {{ $errors->first('namalengkap') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.job.fields.title_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                        value="{{ old('namalengkap', isset($kandidat) ? $kandidat->email : '') }}" required>
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
                        <input type="password" id="password" name="password" class="form-control" required>
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
                    <textarea type="text" id="alamat" name="alamat" class="form-control" value=""
                        required>{{ isset($kandidat) ? $kandidat->alamat : '' }}</textarea>
                    @if ($errors->has('alamat'))
                        <em class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
                <div class="form-group {{ $errors->has('biografi') ? 'has-error' : '' }}">
                    <label for="biografi">Biografi</label>
                    <textarea type="text" id="biografi" name="biografi" class="form-control" value=""
                        required>{{ isset($kandidat) ? $kandidat->biografi : '' }}</textarea>
                    @if ($errors->has('biografi'))
                        <em class="invalid-feedback">
                            {{ $errors->first('biografi') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
                <div class="form-group {{ $errors->has('skillutama') ? 'has-error' : '' }}">
                    <label for="skillutama">Keahlian</label>
                        <select name="skillutama" id="skillutama" class="form-control select2" required>
                            @foreach ($main_skill as $data )
                                @if ($kandidat->skillutama == $data->nama)
                                    <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                @else
                                    <option value="{{ $data->id }}" >{{ $data->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    @if ($errors->has('skillutama'))
                        <em class="invalid-feedback">
                            {{ $errors->first('skillutama') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>

                <div class="form-group ">
                    <label for="skill">Skill</label>
                    <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @for ($i = 0; $i < count($kandidat->namaskill); $i++)
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="inputFormRow4">
                                    <div class="input-group mb-3">
                                        <input type="text" name="namaskill[]" class="form-control m-input"
                                            placeholder="Masukkan Nama Skill" autocomplete="off"
                                            value="{{ $kandidat->namaskill[$i] }}">
                                        <input type="text" name="rangeskill[]" class="form-control m-input"
                                            placeholder="Masukkan Presentase Skill" autocomplete="off"
                                            value="{{ $kandidat->rangeskill[$i] }}">
                                        <div class="input-group-append">
                                            <button id="removeRow4" type="button" class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="newRow4"></div>

                            </div>
                        </div>
                    @endfor
                    <button id="addRow4" type="button" class="btn btn-success">Add More</button>
                </div>

                <div class="form-group ">
                    <label for="pendidikan">Riwayat Pendidikan</label>
                    <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @for ($i = 0; $i < count($kandidat->school); $i++)
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="inputFormRow5">
                                    <div class="input-group mb-3">
                                        <input type="text" name="school[]" class="form-control m-input"
                                            placeholder="Masukkan Nama Sekolah" autocomplete="off"
                                            value="{{ $kandidat->school[$i] }}">
                                        <input type="text" name="tahun[]" class="form-control m-input"
                                            placeholder="Masukkan Tahun" autocomplete="off"
                                            value="{{ $kandidat->tahun[$i] }}">
                                        <div class="input-group-append">
                                            <button id="removeRow5" type="button" class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="newRow5"></div>

                            </div>
                        </div>
                    @endfor
                    <button id="addRow5" type="button" class="btn btn-success">Add More</button>
                </div>

                <div class="form-group ">
                    <label for="organisasi">Organisasi</label>
                    <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @for ($i = 0; $i < count($kandidat->organisasi); $i++)
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="inputFormRow6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="organisasi[]" class="form-control m-input"
                                            placeholder="Masukkan Nama Organisasi" autocomplete="off"
                                            value="{{ $kandidat->organisasi[$i] }}">
                                        <input type="text" name="jabatan[]" class="form-control m-input"
                                            placeholder="Masukkan Jabatan" autocomplete="off"
                                            value="{{ $kandidat->jabatan[$i] }}">
                                        <div class="input-group-append">
                                            <button id="removeRow6" type="button" class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="newRow6"></div>

                            </div>
                        </div>
                    @endfor
                    <button id="addRow6" type="button" class="btn btn-success">Add More</button>
                </div>

                <div class="form-group ">
                    <label for="pengalaman">Pengalaman Kerja</label>
                    <div class="alert alert-success print-success-msg" style="display:none">
                        <ul></ul>
                    </div>
                    @for ($i = 0; $i < count($kandidat->kantor); $i++)
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="inputFormRow7">
                                    <div class="input-group mb-3">
                                        <input type="text" name="kantor[]" class="form-control m-input"
                                            placeholder="Masukkan Nama Kantor" autocomplete="off"
                                            value="{{ $kandidat->kantor[$i] }}">
                                        <input type="text" name="pekerjaan[]" class="form-control m-input"
                                            placeholder="Masukkan Pekerjaan" autocomplete="off"
                                            value="{{ $kandidat->pekerjaan[$i] }}">
                                        <div class="input-group-append">
                                            <button id="removeRow7" type="button" class="btn btn-danger">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="newRow7"></div>

                            </div>
                        </div>
                    @endfor
                    <button id="addRow7" type="button" class="btn btn-success">Add More</button>
                </div>

                {{-- <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                <label for="location">Lokasi/Kota*</label>
                <select name="location_id" id="location" class="form-control select2" required>
                    @foreach ($locations as $id => $location)
                        <option value="{{ $id }}" {{ (isset($job) && $job->location ? $job->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if ($errors->has('location_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('location_id') }}
                    </em>
                @endif
            </div>

            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">Kecamatan</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($job) ? $job->address : '') }}">
                @if ($errors->has('address'))
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
                @if ($errors->has('job_nature'))
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
                @if ($errors->has('gender'))
                    <em class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('pendidikan') ? 'has-error' : '' }}">
                <label for="pendidikan">Minimal Pendidikan</label>
                <input type="text" id="pendidikan" name="pendidikan" class="form-control" value="{{ old('pendidikan', isset($job) ? $job->pendidikan : '') }}">
                @if ($errors->has('pendidikan'))
                    <em class="invalid-feedback">
                        {{ $errors->first('pendidikan') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('umur') ? 'has-error' : '' }}">
                <label for="umur">Minimal/Maksimal Umur</label>
                <input type="text" id="umur" name="umur" class="form-control" value="{{ old('umur', isset($job) ? $job->umur : '') }}">
                @if ($errors->has('umur'))
                    <em class="invalid-feedback">
                        {{ $errors->first('umur') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>


            <div class="form-group {{ $errors->has('bataslamaran') ? 'has-error' : '' }}">
                <label for="bataslamaran">Batas Lamaran</label>
                <input type="text" id="bataslamaran" name="bataslamaran" class="form-control" value="{{ old('bataslamaran', isset($job) ? $job->bataslamaran : '') }}">
                @if ($errors->has('bataslamaran'))
                    <em class="invalid-feedback">
                        {{ $errors->first('bataslamaran') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <label for="categories">Kategori</label>
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="categories[]" id="categories" class="form-control select2" multiple="multiple">
                    @foreach ($categories as $id => $categories)
                        <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || isset($job) && $job->categories->contains($id)) ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                @if ($errors->has('categories'))
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
                @if ($errors->has('salary'))
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
                @if ($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('notelp') ? 'has-error' : '' }}">
                <label for="notelp">Nomor Handphone*</label>
                <input type="text" id="notelp" name="notelp" class="form-control" value="{{ old('notelp', isset($job) ? $job->notelp : '') }}" required>
                @if ($errors->has('notelp'))
                    <em class="invalid-feedback">
                        {{ $errors->first('notelp') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                <label for="website">Website*</label>
                <input type="text" id="website" name="website" class="form-control" value="{{ old('website', isset($job) ? $job->website : '') }}" required>
                @if ($errors->has('website'))
                    <em class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>

            <div class="form-group {{ $errors->has('top_rated') ? 'has-error' : '' }}">
                <label for="top_rated">{{ trans('cruds.job.fields.top_rated') }}</label>
                <input name="top_rated" type="hidden" value="0">
                <input value="1" type="checkbox" id="top_rated" name="top_rated" {{ old('top_rated', 0) == 1 ? 'checked' : '' }}>
                @if ($errors->has('top_rated'))
                    <em class="invalid-feedback">
                        {{ $errors->first('top_rated') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.top_rated_helper') }}
                </p>
            </div> --}}
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>


        </div>
    </div>
@endsection
