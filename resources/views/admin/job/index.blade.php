@extends('layouts.uBolts.index')

@push('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <a type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" href="{{ route('admin.job.create') }}">Buat <span class="m-l-5"><i class="fa fa-cog"></i></span></a>
            </div>

            <h4 class="page-title">Pekerjaan</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Master</a>
                </li>
                <li class="active">
                    Pekerjaan
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="m-t-0 header-title"><b>Daftar Pekerjaan</b></h4>
                <p class="text-muted font-13 m-b-30">
                    List daftar perkerjaan.
                </p>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pekerjaan</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobList as $key => $record)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $record->job_header }}</td>
                            <td>{{ $record->category->name }}</td>
                            <td>
                            @if($record->file != null)
                                <img src="{{ asset('pekerjaan/'. $record->file->path) }}" width="100" height="80" />
                            @else
                                Gambar Kosong
                            @endif
                            </td>
                            <td>{{ Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Ubah</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>

    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.colVis.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.fixedColumns.min.js') }}"></script>

    <script src="{{ asset('assets/ubolts/assets/pages/datatables.init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "assets/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();

    </script>
@endpush
