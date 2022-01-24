
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!--booststrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url("Admin/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url("Admin/dist/css/adminlte.min.css") }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ ("Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ ("Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ ("Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Admin.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- isi content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- Button trigger modal -->
              <div class="card-body">
                    {{-- <button type="button" id="tombol-tambah" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#produk">
                        <i class="fas fa-plus"></i> Tambah
                    </button> --}}
            <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Produk</a>
            <table id="tbl_example" class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Foto</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        <!-- isi content -->
        </div>
    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- MULAI MODAL KONFIRMASI DELETE-->
  @include('Admin.partials.modal.delete')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  @include('Admin.partials.modal.create')
  <!-- Main Footer -->
  @include('Admin.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="{{ url("Admin/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url("Admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ url("Admin/dist/js/adminlte.min.js") }}"></script>
<!-- DataTables  & Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script src="{{ ("Admin/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ ("Admin/plugins/jszip/jszip.min.js") }}"></script>
<script src="{{ ("Admin/plugins/pdfmake/pdfmake.min.js") }}"></script>
<script src="{{ ("Admin/plugins/pdfmake/vfs_fonts.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
<script src="{{ ("Admin/plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


<script type="text/javascript">

     $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


    $(document).ready(function() {
    $('#tbl_example').DataTable({
        ordering: false,
        processing: true,
        serverSide: true,
        ajax : {
            url: "{{ route('produk.index') }}",
            type: "GET",
        },
        columns: [
            {
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
            },
            {data:"produk", name:"produk"},
            {data:"foto", name:"foto"},
            {data:"kategori", name:"kategori"},
            {data:"action", name:"action", orderable: false, searchable: false}
        ],
         columnDefs:
            [{
                "targets": 2,
                data: 'foto',
                "render": function (data, type, row, meta) {
                    // return '<img src="' + data + '" alt="' + data + '"height="16" width="16"/>';
                    return "<img src=\"/pict/" + data + "\" height=\"50\"/>";
                }
            }],
        order: [[0, 'asc']]
    });
});

$('#tombol-tambah').click(function () {
            $('#tombol-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form').trigger("reset"); //mereset semua input dll didalamnya
            $('#exampleModalLabel').html("Tambah Produk"); //valuenya tambah pegawai baru
            $('#produk_modal').modal('show'); //modal tampil
        });


//SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
        // if ($("#form").length > 0){
        //     $("#form").validate({
        //         submitHandler: function (form) {
        //             var actionType = $('#tombol-simpan').val();
        //             $('#tombol-simpan').html('Sending..');
        //             $.ajax({
        //                 data: $('#form')
        //                     .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
        //                 url: "{{ route('produk.store') }}", //url simpan data
        //                 contentType: false,
        //                 type: "POST", //karena simpan kita pakai method POST
        //                 dataType: 'json', //data tipe kita kirim berupa JSON
        //                 success: function (data) { //jika berhasil
        //                     $('#form').trigger("reset"); //form reset
        //                     $('#produk_modal').modal('hide'); //modal hide
        //                     $('#tombol-simpan').html('Simpan'); //tombol simpan
        //                     var oTable = $('#tbl_example').dataTable(); //inialisasi datatable
        //                     oTable.fnDraw(false); //reset datatable
        //                 }
        //                 // error: function (data) { //jika error tampilkan error pada console
        //                 //     console.log('Error:', data);
        //                 //     $('#tombol-simpan').html('Simpan');
        //                 // }
        //             });
        //         }
        //     })
        // }

function save(){
        $('#errors_produk').text('');
        var formData = new FormData($('#form')[0]);
        $.ajax({
            url : "{{ route('produk.store') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (response){
                if(response.status){
                    alert("Data Saved");
                    var oTable = $('#tbl_example').dataTable();
                    oTable.fnDraw(false); //reset datatable
                    $('#produk_modal').modal('hide')
                }else{
                    if(response.errors.produk){
                        $('#errors_produk').text(response.errors.produk[0]);
                    }
                }
            },
            error: function(error){
                console.log(error)
                alert("Data Not Saved");
            }
        });
    }

    $('body').on('click', '.edit-post', function () {
            $('#errors_produk').text('');
            var data_id = $(this).data('id');
            $.get('produk/' + data_id + '/edit', function (data) {
                $('#form')[0].reset();
                $('#exampleModalLabel').html("Edit Post");
                $('#tombol-simpan').val("edit-post");
                $('#produk_modal').modal('show');
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data.id);
                $('#produk').val(data.produk);
                $('#id_kategori').val(data.id_kategori);
                //$('#foto').val(data.foto);
            })
        });

    // function editForm(url) {
    //     $('#produk_modal').modal('show');
    //     $('#produk_modal .modal-title').text('Edit Produk');

    //     $('#produk_modal form')[0].reset();
    //     $('#produk_modal form').attr('action', url);
    //     $('#produk_modal [name=_method]').val('put');
    //     $('#produk_modal [name=produk]').focus();

    //     $.get(url)
    //         .done((response) => {
    //             $('#id').val(response.id);
    //             $('#produk').val(response.produk);
    //             $('#foto').val(response.foto);
    //             $('#id_kategori').val(response.id_kategori);
    //         })
    //         .fail((errors) => {
    //             alert('Tidak dapat menampilkan data');
    //             return;
    //         });
    // }

    //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });

    //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "/produk/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tbl_example').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                }
            })
        });



</script>

</body>
</html>
