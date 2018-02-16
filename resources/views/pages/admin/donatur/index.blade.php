@extends('layouts.app')

@section('title','Home')

@section('role','ADMIN')

@section('sidebar')
    @include('components.admin.sidebar')
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
                        DATA DONATUR
                    </h2>
                    <br>
                    <div class="js-modal-buttons">
                        <button type="button" data-toggle="modal" data-target="#mdModal" class="btn bg-cyan waves-effect"><i class="material-icons">person_add</i>
                        <span>Add</span></button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Id Line</th>
                                    <th>Status</th>
                                    <th>Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>Jl. Teknik Kimia No 50 Kuputih Surabaya</td>
                                    <td>0813289732</td>
                                    <td>M777ijs</td>
                                    <td><label class="label bg-red">Belum</label></td>
                                    <td>
                                        <button class="btn bg-green waves-effect">Verifikasi</button>
                                        <button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#mdModal">Edit</button>
                                        <button class="btn bg-red waves-effect">Delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Nelson Hames</td>
                                    <td>Jl. Teknik Komputer II No 50 Kuputih Surabaya</td>
                                    <td>0813789732</td>
                                    <td>nelsonh</td>
                                    <td><label class="label bg-red">Belum</label></td>
                                    <td>
                                        <button class="btn bg-green waves-effect">Verifikasi</button>
                                        <button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#mdModal">Edit</button>
                                        <button class="btn bg-red waves-effect">Delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sugiono</td>
                                    <td>Jl. Teknik Kedokteran II No 50 Yakali Surabaya</td>
                                    <td>0813789732</td>
                                    <td>sugiono6788</td>
                                    <td><label class="label bg-green">Sudah</label></td>
                                    <td>
                                        <button class="btn bg-red waves-effect">Batalkan</button>
                                        <button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#mdModal">Edit</button>
                                        <button class="btn bg-red waves-effect">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #66cdaa">
                    <h3 class="text-center modal-title" style="color:#FFFFFF"  id="defaultModalLabel">Tambah Anggota</h3>
                </div>
                <div class="modal-body">
                    <form id="myForm" action="" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="telpon" required>
                                        <label class="form-label">Telpon</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="line" required>
                                        <label class="form-label">Id Line</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="checkbox">
                                      <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                <label for="basic_checkbox_2">Verifikasi</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </form>
                </div>
                <div class="modal-footer">
                    <button {{-- type="submit" form="myForm" --}} class="btn btn-link waves-effect" data-dismiss="modal">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
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