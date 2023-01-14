@extends('layouts.admin')
@section('content')

<div style="margin-bottom: 10px;" class="row">

</div>
<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Mitra {{ trans('global.list') }}
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Company">
                <thead>
                    <tr>
                        <th width="10">
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.name') }}
                        </th>
                        <th width="50%">
                            Deskripsi
                        </th>
                        <th width="20%">
                            Alamat
                        </th>
                        <th width="20%">
                            Nomor Telepon
                        </th>
                        <th>
                            {{ trans('cruds.company.fields.logo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mitras as $key => $mitra)
                        <tr data-entry-id="{{ $mitra->id }}">
                            <td style="vertical-align: middle; text-align: center;">

                            </td>
                            <td style="width: 50px; vertical-align: middle; text-align: center;">
                                {{ $mitra->id ?? '' }}
                            </td>
                            <td>
                                {{ $mitra->nama ?? '' }}
                            </td>
                            <td>
                                {{ $mitra->deskripsi ?? '' }}
                            </td>
                            <td>
                                {{ $mitra->alamat ?? '' }}
                            </td>
                            <td>
                                {{ $mitra->no ?? '' }}
                            </td>
                            <td style="width: 150px; vertical-align: middle; text-align: center;">
                                @if($mitra->logo)
                                    <img src="{{ url('img/mitralogo') }}/{{ $mitra->logo }}" style="width: 100px; height: 70px;">
                                @endif
                            </td>
                            <td align="center">
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.mitra.show', $mitra->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <form action="{{ route('admin.mitra.destroy', $mitra->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                                @if (App\Models\User::where('email', $mitra->email)->first() == null)
                                    <a class="btn btn-xs btn-success" href="{{ route('admin.addmitra', $mitra->id) }}" style="width: auto">
                                        Terima Mitra
                                    </a>
                                @endif

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
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.mitra.massDestroy') }}",
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
  $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
