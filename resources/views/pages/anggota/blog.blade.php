@extends('layouts.app')

@section('title','Blog')

@section('role','ANGGOTA')

@section('sidebar')
    @include('components.anggota.sidebar')
@endsection

@section('custom-css')
    <link href="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <style type="text/css">
        @font-face {
            font-family: Hanacaraka;
            src: url('{{ asset('/fonts/Hanacaraka.TTF') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATA BLOG
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <button class="btn bg-green" data-toggle="modal" data-target="#createSoalModal" id="tambahSoal"><i class="material-icons">add_circle_outline</i><span>Tambah Post</span></button>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-basic-example" id="soalTable">
                            <thead>
                                <tr>
                                    <th>Nama Pembuat</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Preview</th>
                                    <th>Status</th>
                                    <th>Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>Taman Bungkul</td>
                                    <td>Kegiatan Sunday Sharing Loperman kali ini.....</td>
                                    <td><a href="/blog/1" class="btn bg-blue waves-effect">Preview</a></td>
                                    <td><label class="label bg-red">Belum</label></td>
                                    <td>
                                        <button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#createSoalModal">Edit</button>
                                        <button class="btn bg-red waves-effect">Delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Mudhoffar</td>
                                    <td>Berbagi menuju kebahagiaan yang hakiki</td>
                                    <td>Berbagi dengan sesama merupakan kebaikan yang.....</td>
                                    <td><a href="/blog/2" class="btn bg-blue waves-effect">Preview</a></td>
                                    <td><label class="label bg-green">Sudah</label></td>
                                    <td>
                                        <button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#createSoalModal">Edit</button>
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
    <!-- #END# Exportable Table -->

    {{-- Create Modal --}}
    <div class="modal fade" id="createSoalModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="createSoalModalLabel">Tambah Post</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/soal/create/1" id="formCreate">
                        {{csrf_field()}}
                        {{-- <input type="hidden" name="paket_id" value="{{ $paket_id }}"> --}}
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul" required>
                                <label class="form-label">Judul</label>
                            </div>
                        </div>
                        <label>Isi</label>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="deskripsi" id="deskripsi1">
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                           <input type="submit" name="submit" class="btn bg-green waves-effect" id="submitCreate">
                            <button class="btn bg-red waves-effect" data-dismiss="modal">Batal</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    {{-- datatable custom width --}}
    <script>
        $(function(){
            $('#soalTable').DataTable({
                "autoWidth": false,
                "columns": [
                    { "width": "5%"},
                    { "width": "65%"},
                    { "width": "10%"},
                    { "orderable": false, "width": "20%"}
                ]
            });
        });
    </script>
    {{-- datatables --}}
    <script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{url('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>

    <!-- TinyMCE -->
    {{-- <script src="{{url('bower_components/adminbsb-materialdesign/plugins/tinymce/tinymce.js')}}"></script> --}}
    {{-- initialization --}}
    <script src="{{ URL::asset('/bower_components/tinymce/tinymce.min.js') }}" type="text/javascript" ></script>
{{--     <script>
        $(document).on('focusin', function(event) {
            if ($(event.target).closest(".mce-window").length) {
                event.stopImmediatePropagation();
            }
        });
    </script> --}}
    <script>
        tinymce.init({ 
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern eqneditor"
        ],
        toolbar: "undo redo | eqneditor link image | styleselect | fontselect fontsizeselect |bold italic | bullist numlist outdent indent | forecolor backcolor emoticons",
        font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace',
        mode : 'textareas',
        paste_data_images:true,
        image_advtab: true,
        file_picker_callback: function(callback, value, meta) {
              if (meta.filetype == 'image') {
                $('#upload').trigger('click');
                $('#upload').on('change', function() {
                  var file = this.files[0];
                  var reader = new FileReader();
                  reader.onload = function(e) {
                    callback(e.target.result, {
                      alt: ''
                    });
                  };
                  reader.readAsDataURL(file);
                });
              }
            },
        });
    </script>

    {{-- ajax --}}
    <script>
        $(".edit").click(function(){
            $("#soal_id").val(this.id);
            $.ajax({
               url: '/soal/ajax/get_soal',
               type: 'POST',
               data: {
                  '_token': "{{ csrf_token() }}",
                  'id': this.id
               },
               error: function() {
                  // $('#info').html('<p>An error has occurred</p>');
                  console.log('Error');
               },
               dataType: 'json',
               success: function(data) {
                  // console.log(data);
                  tinymce.get('deskripsi').setContent(data.deskripsi);
                  tinymce.get('pilihan_a').setContent(data.pilihan_a);
                  tinymce.get('pilihan_b').setContent(data.pilihan_b);
                  tinymce.get('pilihan_c').setContent(data.pilihan_c);
                  tinymce.get('pilihan_d').setContent(data.pilihan_d);
                  tinymce.get('pilihan_e').setContent(data.pilihan_e);
                  $("#"+data.kunci_jawaban).prop('checked', true);
                  $("#"+data.tingkat_kesulitan).prop('checked', true);
               }
            });
        });

        $(".delete").click(function(){
            if(confirm("Apakah anda yakin akan menghapus soal ini?"))
            {
                $.ajax({
                   url: '/soal/delete',
                   type: 'POST',
                   data: {
                      '_token': "{{ csrf_token() }}",
                      'id': this.id
                   },
                   error: function() {
                      console.log('Error');
                   },
                   dataType: 'json',
                   success: function(data) {
                    $('tr[soal_id="'+data+'"]').remove();
                    // Renumbering 
                    $('td:first-child').each(function (i) {
                        $(this).text(i+1);
                    });
                   }
                });
            }
        });
    </script>

    {{-- create validation --}}
    <script>
        $("#formCreate").submit(function(e){
            var desc = tinymce.get('deskripsi1').getContent();
            var pilihan_a = tinymce.get('pilihan_a1').getContent();
            var pilihan_b = tinymce.get('pilihan_b1').getContent();
            var pilihan_c = tinymce.get('pilihan_c1').getContent();
            var pilihan_d = tinymce.get('pilihan_d1').getContent();
            var pilihan_e = tinymce.get('pilihan_e1').getContent();
            var kunci_jawaban = $("input[name='kunci_jawaban']:checked").val();
            var tingkat_kesulitan = $("input[name='tingkat_kesulitan']:checked").val();

            console.log(desc, pilihan_a, pilihan_b, pilihan_c, pilihan_d, pilihan_e, kunci_jawaban, tingkat_kesulitan);

            if(desc == '' || pilihan_a == '' || pilihan_b == '' || pilihan_c == '' || pilihan_d == '' || pilihan_e == '' || !kunci_jawaban || !tingkat_kesulitan)
            {
                alert('Error! Pastikan semua data sudah terisi');
                e.preventDefault(e);
            }
        });
    </script>
    
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config({
        showMathMenu: false,
        showProcessingMessages: false,
        tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
      });
    </script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/MathJax/MathJax.js') }}?config=TeX-MML-AM_HTMLorMML">
    </script>
    <script type="text/javascript">
        var renderMathJax =  function()
        {
            MathJax.Hub.Queue(["Typeset",MathJax.Hub,"math-tex"]);
        };
    </script> 

@endsection