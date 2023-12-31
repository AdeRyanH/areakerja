@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <b>Edit Company</b>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.companies.update", [$company->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.company.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($company) ? $company->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.company.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
                <label for="deskripsi">Deskripsi*</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="{{ old('deskripsi', isset($company) ? $company->deskripsi : '') }}" required>
                <p class="helper-block">
                    {{ trans('cruds.company.fields.name_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                <label for="alamat">Alamat*</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat', isset($company) ? $company->alamat : '') }}" required>
                <p class="helper-block">
                    {{ trans('cruds.company.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('gambar') ? 'has-error' : '' }}">
                <label for="gambar">Gambar Baru*</label><br>
                <div class="" style="margin-bottom: 20px; margin-top: 10px">
                    <img src="{{ $company->gambar }}" style="height: 100px;">
                    <p style="color: #6c757d">Gambar lama</p>
                </div>
                <input type="file" id="gambar" name="gambar" value="{{ old('gambar', isset($company) ? $company->gambar : '') }}" >
                <p class="helper-block">
                    {{ trans('cruds.company.fields.name_helper') }}
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
    {{-- <script>
        Dropzone.options.logoDropzone = {
        url: '{{ route('admin.companies.storeMedia') }}',
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
        size: 2,
        width: 4096,
        height: 4096
        },
        success: function (file, response) {
        $('form').find('input[name="logo"]').remove()
        $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
        },
        removedfile: function (file) {
        file.previewElement.remove()
        if (file.status !== 'error') {
            $('form').find('input[name="logo"]').remove()
            this.options.maxFiles = this.options.maxFiles + 1
        }
        },
        init: function () {
    @if(isset($company) && $company->logo)
        var file = {!! json_encode($company->logo) !!}
            this.options.addedfile.call(this, file)
        this.options.thumbnail.call(this, file, '{{ $company->logo->getUrl('thumb') }}')
        file.previewElement.classList.add('dz-complete')
        $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
        this.options.maxFiles = this.options.maxFiles - 1
    @endif
        },
        error: function (file, response) {
            if ($.type(response) === 'string') {
                var message = response //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file
            }
            file.previewElement.classList.add('dz-error')
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
            _results = []
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i]
                _results.push(node.textContent = message)
            }

            return _results
        }
    }
    </script> --}}
@stop
