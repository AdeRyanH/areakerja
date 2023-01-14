@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            {{ trans('cruds.job.title_singular') }} {{ trans('global.list') }}
            <a class="btn btn-success ml-2" href="{{ route("admin.jobs.create") }}">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                {{ trans('global.add') }} {{ trans('cruds.job.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Job">
                <thead class="bg-warning">
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.company') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.full_description') }}
                        </th>
                        <th>
                            Requirements
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.categories') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.salary') }}
                        </th>
                        <th>
                            {{ trans('cruds.job.fields.top_rated') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $key => $job)
                        <tr data-entry-id="{{ $job->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $job->id ?? '' }}
                            </td>
                            <td>
                                {{ $job->title ?? '' }}
                            </td>
                            <td>
                                {{ $job->company->name ?? '' }}
                            </td>
                            <td>
                                @foreach($job->full_description as $hehe2)
                                    <li>{{ $hehe2 }}</li>
                                @endforeach
                            </td>
                            <td>
                                @foreach($job->requirements as $hehe)
                                    <li>{{ $hehe }}</li>
                                @endforeach
                            </td>
                            <td>
                                {{ $job->location->name ?? '' }}
                            </td>
                            <td>
                                {{ $job->address ?? '' }}
                            </td>
                            <td>
                                @foreach($job->categories as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $job->salary ?? '' }}
                            </td>
                            <td>
                                {{ $job->top_rated ? trans('global.yes') : trans('global.no') }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.jobs.show', $job->id) }}" style="width: 60px">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.jobs.edit', $job->id) }}" style="width: 60px">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}" style="width: 60px">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.jobs.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')
        return
      }
      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Job:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection
