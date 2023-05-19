@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <b>Show Price</b>
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
                            {{ $price->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nama Paket
                        </th>
                        <td>
                            {{ $price->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Singkat
                        </th>
                        <td>
                            {{ $price->deskripsi_singkat ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Deskripsi Full
                        </th>
                        <td>
                            {{ $price->deskripsi_full ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            List
                        </th>
                        <td>
                            @foreach($price->list as $hoho)
                            <li>{{ $hoho }}</li>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Harga
                        </th>
                        <td>
                            Rp. {{ number_format( $price->harga ?? '' , 0, '.', '.'); }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Warna
                        </th>
                        <td>
                            {{ $price->warna ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Pesan
                        </th>
                        <td>
                            {{ $price->pesan ?? '' }}
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
