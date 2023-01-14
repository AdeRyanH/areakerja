@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
            List Calon Kandidat
            <!-- {{ trans('cruds.job.title_singular') }} {{ trans('global.list') }} -->
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
                            Nama Lengkap
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Skill
                        </th>
                        <th>
                            CV
                        </th>
                        {{-- <th>
                            Nama Pekerjaan
                        </th>
                        <th>
                            Alamat Kantor
                        </th>
                        <th>
                            Deskripsi Pekerjaan
                        </th>
                        <th>
                            Syarat Pekerjaan
                        </th>
                        <th>
                            Gender
                        </th>
                        <th>
                            Minimal Umur
                        </th>
                        <th>
                            Minimal Pendidikan
                        </th>
                        <th>
                            Status Kerja
                        </th>
                        <th>
                            Batas Lamaran
                        </th>
                        <th>
                            Gaji
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            No Telepon
                        </th>
                        <th>
                            Website
                        </th> --}}
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lowongan as $min)
                        <tr data-entry-id="{{ $min->id }}">
                            <td>

                            </td>
                            <td>{{$min->id}}</td>
                            <td>{{$min->namalengkap}}</td>
                            <td>{{$min->alamat}}</td>
                            <td>{{$min->skillutama}}</td>
                            <td>CV</td>
                            {{-- <td>
                                {{ $low->title ?? '' }}
                            </td>
                            <td>
                                {{ $low->alamat_kantor ?? '' }}
                            </td>
                            <td>
                                {{ $low->short_description ?? '' }}
                            </td>
                            <td>
                                {{ $low->full_description ?? '' }}
                            </td>
                            <td>
                                {{ $low->gender ?? '' }}
                            </td>
                            <td>
                                {{ $low->min_umur ?? '' }}
                            </td>
                            <td>
                                {{ $low->min_pendidikan ?? '' }}
                            </td>
                            <td>
                                {{ $low->job_nature ?? '' }}
                            </td>
                            <td>
                                {{ $low->bataslamaran ?? '' }}
                            </td>
                            <td>
                                {{ $low->salary ?? '' }}
                            </td>
                            <td>
                                {{ $low->email ?? '' }}
                            </td>
                            <td>
                                {{ $low->notelp ?? '' }}
                            </td>
                            <td>
                                {{ $low->web ?? '' }}
                            </td> --}}
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.calonkandidat.show', $min->id) }}" style="width: 60px">
                                    {{ trans('global.view') }}
                                </a>

                                <form action="#" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}" style="width: 60px">
                                </form>

                                <a class="btn btn-xs btn-success" href="{{ route('admin.calonkandidat.edit', $min->id) }}" style="width: auto">
                                    Terima Kandidat
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
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.lowongan.massDestroy') }}",
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
