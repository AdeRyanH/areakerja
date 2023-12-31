@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <b>Show Company</b>
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.id') }}
                        </th>
                        <td>
                            {{ $company->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.name') }}
                        </th>
                        <td>
                            {{ $company->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi
                        </th>
                        <td>
                            {{ $company->deskripsi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {{ $company->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.logo') }}
                        </th>
                        <td>
                            @if($company->gambar)
                                    <img src="{{ $company->gambar }}" style="width: 400px; height: 280px;">
                            @endif
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>
                            Sumber Logo
                        </th>
                        <td>
                            {{ $company->gambar }}
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection

