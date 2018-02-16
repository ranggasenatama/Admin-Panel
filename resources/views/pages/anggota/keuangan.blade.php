@extends('layouts.app')

@section('title','Keuangan')

@section('role','ANGGOTA')

@section('sidebar')
    @include('components.anggota.sidebar')
@endsection

@section('custom-css')
	<link href="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATA KEUANGAN
                    </h2>
                    <br>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Dana</th>
                                    <th>Waktu</th>
                                    <th>Keterangan</th>
                                    <th>Jenis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rp 100.000,-</td>
                                    <td>3 November 2017</td>
                                    <td>Pembelian Nasi</td>
                                    <td><label class="label bg-red">Pengeluaran</label></td>
                                </tr>

                                <tr>
                                    <td>Rp 1.000.000,-</td>
                                    <td>4 November 2017</td>
                                    <td>Sumbangan Donatur</td>
                                    <td><label class="label bg-green">Pemasukan</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script src="{{url('bower_components/adminbsb-materialdesign/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection