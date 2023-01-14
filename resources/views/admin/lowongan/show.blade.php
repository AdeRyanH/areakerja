@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $lowongan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Perusahaan
                        </th>
                        <td>
                            {{ $lowongan->namaperusahaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi
                        </th>
                        <td>
                            {{ $lowongan->deskripsiperusahaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {{ $lowongan->alamatperusahaan }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Logo Perusahaan
                        </th>
                        <td>
                            @if($lowongan->gambar)
                                <img src="{{ url('img/tmpcompanylogo') }}/{{ $lowongan->gambar }}" style="width: 400px; height: 280px;">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pekerjaan
                        </th>
                        <td>
                            {{ $lowongan->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat Kantor
                        </th>
                        <td>
                            {{ $lowongan->alamat_kantor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Pekerjaan
                        </th>
                        <td>
                            {{ $lowongan->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Syarat Pekerjaan
                        </th>
                        <td>
                            {{ $lowongan->full_description}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Kerja
                        </th>
                        <td>
                            {{ $lowongan->job_nature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $lowongan->gender}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minimal Pendidikan
                        </th>
                        <td>
                            {{ $lowongan->min_pendidikan}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minimal Umur
                        </th>
                        <td>
                            {{ $lowongan->min_umur}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Batas Lamaran
                        </th>
                        <td>
                            {{ $lowongan->bataslamaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gaji
                        </th>
                        <td>
                            {{ $lowongan->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $lowongan->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            No Telepon
                        </th>
                        <td>
                            {{ $lowongan->notelp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Website
                        </th>
                        <td>
                            {{ $lowongan->web }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
