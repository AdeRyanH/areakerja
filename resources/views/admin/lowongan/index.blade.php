@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row align-items-center justify-content-between d-flex" style="margin-left: 2px; margin-right:2px">
                List Lowongan
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
                                Nama Perusahaan
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Logo Perusahaan
                            </th>
                            <th>
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
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongan as $low)
                            <tr data-entry-id="{{ $low->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $low->id }}
                                </td>
                                <td>
                                    {{ $low->namaperusahaan }}
                                </td>
                                <td>
                                    {{ $low->deskripsiperusahaan }}
                                </td>
                                <td>
                                    {{ $low->alamatperusahaan }}
                                </td>
                                <td style="width: 150px; vertical-align: middle; text-align: center;">
                                    @if ($low->gambar)
                                        <img src="{{ url('storage/tmpcompanylogo') }}/{{ $low->gambar }}"
                                            style="width: 100px; height: 70px;">
                                    @endif
                                    <a download="{{ $low->namaperusahan }}"
                                        href="{{ Storage::url('tmpcompanylogo') }}/{{ $low->gambar }}"
                                        title="{{ $low->namaperusahaan }}">
                                        <button type="button" class="btn btn-primary mt-2">Download</button>
                                    </a>
                                </td>
                                <td>
                                    {{ $low->posisi }}
                                </td>
                                <td>
                                    {{ $low->alamat_kantor }}
                                </td>
                                <td>
                                    {{ $low->deskripsi_pekerjaan }}
                                </td>
                                <td>
                                    {{ $low->syarat_pekerjaan }}
                                </td>
                                <td>
                                    {{ $low->gender }}
                                </td>
                                <td>
                                    {{ $low->min_umur }}
                                </td>
                                <td>
                                    {{ $low->min_pendidikan }}
                                </td>
                                <td>
                                    {{ $low->job_nature }}
                                </td>
                                <td>
                                    {{ $low->bataslamaran }}
                                </td>
                                <td>
                                    {{ $low->gaji }}
                                </td>
                                <td>
                                    {{ $low->email }}
                                </td>
                                <td>
                                    {{ $low->notelp }}
                                </td>
                                <td>
                                    {{ $low->web }}
                                </td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.lowongan.show', $low->id) }}"
                                        style="width: 60px">
                                        {{ trans('global.view') }}
                                    </a>

                                    <form action="{{ route('admin.lowongan.destroy', $low->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                            value="{{ trans('global.delete') }}" style="width: 60px">
                                    </form>

                                    <a class="btn btn-xs btn-success" href="{{ route('admin.lowongan.edit', $low->id) }}"
                                        style="width: auto">
                                        Detail Pembayaran
                                    </a>

                                    @if ($low->pembayaran->status == 'LUNAS')
                                        <a class="btn btn-xs btn-success"
                                            href="{{ route('admin.addjoblowongan', $low->id) }}" style="width: auto">
                                            Terima Lowongan
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
        $(function() {
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
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Job:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
