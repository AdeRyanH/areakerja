@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Province List
                <a class="btn btn-success ml-2" href="/admin/provinces/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Province
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                    <thead>
                        <tr>
                            <th width="10">
                                Id
                            </th>
                            <th>
                                Province
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->province }}</td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/provinces/edit/{{ $data->id }}">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/provinces/destroy/{{ $data->id }}">
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