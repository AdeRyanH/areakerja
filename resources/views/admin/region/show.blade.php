@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                <b>Location List</b>
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
                                Province
                            </th>
                            <th>
                                Regency
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regencies as $regencies)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $regencies->province->name }}</td>
                            <td>{{ $regencies->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection