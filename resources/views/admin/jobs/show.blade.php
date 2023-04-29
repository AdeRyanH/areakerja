@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.job.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <td>
                            {{ $job->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Pekerjaan
                        </th>
                        <td>
                            {{ $job->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Perusahaan
                        </th>
                        <td>
                            {{ $job->company->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat Kantor
                        </th>
                        <td>
                            {{ $job->lokasikerja ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lokasi/Kota
                        </th>
                        <td>
                            {{ $kotasekarang->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kecamatan
                        </th>
                        <td>
                            {{ $job->address ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Pekerjaan
                        </th>
                        <td>
                            @foreach($job->full_description as $hehe2)
                            <li>{{ $hehe2 }}</li>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Syarat Pekerjaan
                        </th>
                        <td>
                            @foreach($job->requirements as $hehe)
                                    <li>{{ $hehe }}</li>
                                @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status Pekerjaan
                        </th>
                        <td>
                            {{ $job->job_nature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $job->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minimal Pendidikan
                        </th>
                        <td>
                            {{ $job->pendidikan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minimal/Maksimal Umur
                        </th>
                        <td>
                            {{ $job->umur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Batas Lamaran
                        </th>
                        <td>
                            {{ $job->bataslamaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori
                        </th>
                        <td>
                            @foreach($job->categories as $id => $categories)
                                <span class="label label-info label-many">{{ $categories->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.salary') }}
                        </th>
                        <td>
                            {{ $job->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $job->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nomor Handphone
                        </th>
                        <td>
                            {{ $job->notelp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Website
                        </th>
                        <td>
                            {{ $job->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Link Formulir
                        </th>
                        <td>
                            {{ $job->formulir }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.top_rated') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $job->top_rated ? "checked" : "" }}>
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
