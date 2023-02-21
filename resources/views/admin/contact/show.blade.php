@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                Contact List
                <a class="btn btn-success ml-2" href="/admin/contact/create">
                    <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                    Tambah Contact
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
                                Name
                            </th>
                            <th>
                                Contact
                            </th>
                            <th style="width: 200px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>
                                <a style="width: 60px" class="btn btn-xs btn-info" href="/admin/contact/edit/{{ $contact->id }}">
                                    Edit
                                </a>
                                <a style="width: 60px" class="btn btn-xs btn-danger" href="/admin/contact/destroy/{{ $contact->id }}">
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