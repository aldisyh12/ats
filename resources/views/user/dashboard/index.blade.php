@extends('layouts.uBolts.index-user')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                @if($testimoni == null)
                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                        data-target="#con-close-modal">Berikan Testimoni<span class="m-l-5"></span></button>
                @else
                @endif
            </div>

            <h4 class="page-title">Dashboard</h4>
            <p class="text-muted page-title-alt">Halo User, Selamat datang di panel Cipta Karsa Karya !</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box fadeInDown animated">
                <div class="bg-icon bg-icon-info pull-left">
                    <i class="md md-verified-user text-info"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter">{{ $countJob }}</b></h3>
                    <p class="text-muted">Total Pekerjaan Yang Dilamar</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.penilaian') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Berikan Penilaian</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Penilaian</label>
                                    <textarea class="form-control" name="description" style="min-width: 100%"></textarea>
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
