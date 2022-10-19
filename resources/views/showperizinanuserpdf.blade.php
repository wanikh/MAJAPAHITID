
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Majapahit.ID | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h3 class="page-header">
          <i class=""></i> Majapahit Teknologi
        </h3>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          NAMA :
          <address>
            <strong>{{$data_items->nama}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          NIK
          <address>
            <strong>{{$data_items->nik}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            TANGGAL LAHIR
            <address>
              <strong>{{$data_items->tanggallahir}}</strong>
            </address>
          </div>
      </div>
      <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>TANGGAL PENGAJUAN</th>
              <th>JABATAN</th>
              <th>ATASAN</th>
              <th>DEPARTEMEN</th>
              <th>ALASAN CUTI</th>
              <th>STATUS</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>{{$data_items->tanggalpengajuan}}</td>
              <td>{{$data_items->jabatan}}</td>
              <td>{{$data_items->atasan}}</td>
              <td>{{$data_items->departemen}}</td>
              <td>{{$data_items->alasancuti}}</td>
              <td>
                <a> <span style="width: 100px;" class="badge {{($data_items->status == 1 ) ? 'bg-success' : 'bg-danger'}}">{{($data_items->status == 1) ? 'Disetujui' : 'Ditolak'}}</span></a><br>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
