@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <b>Show Category</b>
        </div>

        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.category.fields.id') }}
                            </th>
                            <td>
                                {{ $category->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.category.fields.name') }}
                            </th>
                            <td>
                                {{ $category->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ __('SLug') }}
                            </th>
                            <td>
                                {{ $category->slug }}
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
