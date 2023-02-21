@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Cabang List
                <a class="btn btn-success ml-2" href="/admin/cabang/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Cabang
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                    <thead>
                        <tr>
                            <th width="10">
                                No
                            </th>
                            <th>
                                Cabang
                            </th>
                            <th>
                                Url
                            </th>
                            <th>
                                Logo
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cabang as $cabang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cabang->cabang }}</td>
                            <td>{{ $cabang->url }}</td>
                            <td><img src="/img/logo_cabang/{{ $cabang->logo }}" alt="..." style="width: 100px; height: 70px;"></td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/cabang/edit/{{ $cabang->id }}">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/cabang/destroy/{{ $cabang->id }}">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection