@extends('layouts.uBolts.index')

@push('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                        data-target="#con-close-modal">Buat Kategori
                </button>
            </div>

            <h4 class="page-title">Kategori</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Master</a>
                </li>
                <li class="active">
                    Kategori
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="m-t-0 header-title"><b>Kategori Pekerjaan</b></h4>
                <p class="text-muted font-13 m-b-30">
                    List kategori untuk pilihan pekerjaan yang akan diinput.
                </p>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categoryList as $key => $record)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}</td>
                            <td>
                                <div class="d-flex flex-row justify-content-around">
                                    <form action="{{ route('admin.category.delete', $record->id) }}" method="POST" class="d-inline">
                                        <a href="{{ route('admin.category.show', $record->id) }}" class="btn btn-sm btn-primary">Ubah</a>
                                        @csrf
                                        <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Create Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="field-1" placeholder="Nama Kategori">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-ubah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('admin.category.update', $record->id) }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Update Category</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Name</label>
                                    <input type="text" name="name" value="{{ $record->name }}" class="form-control" id="field-1" placeholder="Nama Kategori">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->
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
