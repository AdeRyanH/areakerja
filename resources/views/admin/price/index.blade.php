@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            Price List
            <a class="btn btn-success ml-2" href="{{ route("admin.price.create") }}">
                <i class="fa fa-plus mr-2" aria-hidden="true"></i>
                Add Price
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
                            ID
                        </th>
                        <th>
                            Paket
                        </th>
                        <th>
                            Short Deskripsi
                        </th>
                        <th>
                            Full Deskripsi
                        </th>
                        <th>
                            List
                        </th>
                        <th width="100">
                            Harga
                        </th>
                        <th>
                            Warna
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prices as $key => $price)
                        <tr data-entry-id="{{ $price->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $price->id ?? '' }}
                            </td>
                            <td>
                                {{ $price->nama ?? '' }}
                            </td>
                            <td>
                                {{ $price->deskripsi_singkat ?? '' }}
                            </td>
                            <td>
                                {{ $price->deskripsi_full ?? '' }}
                            </td>
                            <td>
                                @foreach($price->list as $hoho)
                                    <li>{{ $hoho }}</li>
                                @endforeach
                            </td>
                            <td>
                               Rp. {{ number_format( $price->harga ?? '' , 0, '.', '.'); }}
                            </td>
                            <td>
                                {{ $price->warna ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.price.show', $price->id) }}" style="width: 60px">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.price.edit', $price->id) }}" style="width: 60px">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.price.destroy', $price->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.price.massDestroy') }}",
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
