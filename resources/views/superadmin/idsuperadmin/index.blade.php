@extends('layouts.superadmin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                <b>SuperAdmin Account</b>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                    <thead>
                        <tr>
                            <th>
                                Email
                            </th>
                            <th>
                                Hashed Password
                            </th>
                            <th style="width: 200px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($acc as $acc)
                        <tr>
                            <td>{{ $acc->email }}</td>
                            <td>{{ $acc->password }}</td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/superadmin/superadmin/edit/{{ $acc->id }}">
                                    Edit
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