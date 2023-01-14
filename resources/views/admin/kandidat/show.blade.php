@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Kandidat {{ $kandidat->nama }}
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
                            {{ $kandidat->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Lengkap
                        </th>
                        <td>
                            {{ $kandidat->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Skill
                        </th>
                        <td>
                            {{ $kandidat->mainskill->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Domisili
                        </th>
                        <td>
                            {{ $kandidat->domisili ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Biografi
                        </th>
                        <td>
                            {{ $kandidat->biografi ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Skill
                        </th>
                        <td>
                            <ul>
                            @foreach ($skill as $ski)
                                <li><h6 class="mt-2 my-0" style="color: #000">{{ $ski->nama }}</h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000">{{ $ski->tingkat }}%</span></li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Riwayat Pendidikan
                        </th>
                        <td>
                            <ul>
                            @foreach ($pendidikan as $pend)
                                <li><h6 class="mt-2 my-0" style="color: #000">{{ $pend->nama_instansi }}</h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000">{{ $pend->gelar }}</span>
                                <span class="font-weight-normal "
                                        style="color: #000">{{ $pend->tahun }}</span></li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pengalaman Kerja
                        </th>
                        <td>
                            <ul>
                            @foreach ($pengalaman as $peng)
                                <li><h6 class="mt-2 my-0" style="color: #000">{{ $peng->nama_pengalaman }}</h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000">{{ $peng->posisi }}</span>
                                <span class="font-weight-normal "
                                        style="color: #000">{{ $peng->tahun }}</span></li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sertifikat
                        </th>
                        <td>
                            <ul>
                            @foreach ($sertifikasi as $sertif)
                                <li><h6 class="mt-2 my-0" style="color: #000">{{ $sertif->nama_sertifikasi }}</h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000">{{ $sertif->penyelenggara }}</span>
                                <span class="font-weight-normal "
                                        style="color: #000">{{ $sertif->tahun }}</span></li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Organisasi
                        </th>
                        <td>
                            <ul>
                            @foreach ($organisasi as $org)
                                <li><h6 class="mt-2 my-0" style="color: #000">{{ $org->judul }}</h6>
                                <span class="font-weight-normal my-0"
                                    style="color: #000">{{ $org->jabatan }}</span>
                                <span class="font-weight-normal "
                                        style="color: #000">{{ $org->tahun }}</span></li>
                            @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            {{ $kandidat->status ?? '' }}
                        </td>
                    </tr>



                    {{-- <tr>
                        <th>
                            Kategori
                        </th>
                        <td>
                            @foreach($job->categories as $id => $categories)
                                <span class="label label-info label-many">{{ $categories->name }}</span>
                            @endforeach
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.job.fields.salary') }}
                        </th>
                        <td>
                            {{ $job->salary }}
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $job->email }}
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <th>
                            Nomor Handphone
                        </th>
                        <td>
                            {{ $job->notelp }}
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <th>
                            Website
                        </th>
                        <td>
                            {{ $job->website }}
                        </td>
                    </tr> --}}
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.job.fields.top_rated') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $job->top_rated ? "checked" : "" }}>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
