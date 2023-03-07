@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Update Province
    </div>
    <div class="card-body">
        <form action="/admin/provinces/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="province">Province*</label>
                {{-- <input type="text" id="province" name="province" class="form-control" value="{{ old('province') }}"> --}}
                <select name="province" id="province">
                    <option value="">Select Province</option>
                    @foreach ($data as $data)
                        <option value="{{ $data->id }}">{{ $data->province }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="city">City*</label>
                <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}">
            </div>
            <div>
                <input class="btn btn-danger" type="submit">
            </div>
        </form>
    </div>
</div>
@endsection