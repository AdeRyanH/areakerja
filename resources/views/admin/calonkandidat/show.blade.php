@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Calon Kandidat {{ $calonkandidat->namalengkap }}
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
                            {{ $calonkandidat->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Lengkap
                        </th>
                        <td>
                            {{ $calonkandidat->namalengkap }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Alamat
                        </th>
                        <td>
                            {{ $calonkandidat->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Biografi
                        </th>
                        <td>
                            {{ $calonkandidat->biografi ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            CV
                        </th>
                        <td>
                            Tempat CV
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Keahlian
                        </th>
                        <td>
                            {{ $calonkandidat->skillutama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Skill
                        </th>
                        <td>
                            @for ($i = 0; $i < count($calonkandidat->namaskill); $i++)
                            <li> {{ $calonkandidat->namaskill[$i] }} = {{ $calonkandidat->rangeskill[$i] }} % </li>
                            @endfor
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Riwayat Pendidikan
                        </th>
                        <td>
                            @for ($i = 0; $i < count($calonkandidat->school); $i++)
                            <li> <b>{{ $calonkandidat->school[$i] }}</b> pada Tahun  <b>{{ $calonkandidat->tahun[$i] }}</b> </li>
                            @endfor
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Organisasi
                        </th>
                        <td>
                            @for ($i = 0; $i < count($calonkandidat->organisasi); $i++)
                            <li> di <b>{{ $calonkandidat->organisasi[$i] }}</b> Menjabat Sebagai  <b>{{ $calonkandidat->jabatan[$i] }}</b> </li>
                            @endfor
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pengalaman Kerja
                        </th>
                        <td>
                            @for ($i = 0; $i < count($calonkandidat->kantor); $i++)
                            <li> di <b>{{ $calonkandidat->kantor[$i] }}</b> Sebagai  <b>{{ $calonkandidat->pekerjaan[$i] }}</b> </li>
                            @endfor
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
