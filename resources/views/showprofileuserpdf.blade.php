
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

  {{-- favicon --}}
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon_io/favicon-32x32.png')}}">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class=""></i>Majapahit Teknologi
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong><img src="{{asset('fotoprofile/'. $data_profiles->foto)}}" alt="" style="width: 200px;" ></strong>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Nama : {{$data_profiles->nama}}</strong>
        </address>
        <address>
            <strong>Usia : {{$data_profiles->usia}}</strong>
        </address>
        <address>
            <strong>Pendidikan : {{$data_profiles->pendidikan}}</strong>
        </address>
        <address>
            <strong>Email : {{$data_profiles->email}}</strong>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
            <strong>NIK : {{$data_profiles->niks}}</strong>
        </address>
        <address>
            <strong>Kewarganegaraan : {{$data_profiles->kewarganegaraan}}</strong>
        </address>
        <address>
            <strong>Agama : {{$data_profiles->agama}}</strong>
        </address>
        <address>
            <strong>Jenis Kelamin : {{$data_profiles->jeniskelamin}}</strong>
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Departemen :</th>
            <td>{{$data_profiles->departemens}}</td>
            <th>Status Pernikahan:</th>
            <td>{{$data_profiles->statuspernikan}}</td>
            <th>BPJS Ketenagakerjaan :</th>
            <td>{{$data_profiles->bpjsketenagakerjaan}}</td>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th>Jabatan :</th>
            <td>{{$data_profiles->jabatans}}</td>
            <th>No Handphone :</th>
            <td>{{$data_profiles->nohp}}</td>
            <th>BPJS Kesehatan :</th>
            <td>{{$data_profiles->bpjskesehatan}}</td>
          </tr>
          <tr>
            <th>Tempat Lahir :</th>
            <td>{{$data_profiles->tempatlahir}}</td>
            <th>Status Karyawan :</th>
            <td>{{$data_profiles->statuskaryawan}}</td>
            <th>NPWP :</th>
            <td>{{$data_profiles->npwp}}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir :</th>
            <td>{{$data_profiles->tanggallahirs}}</td>
            <th>Tanggal Bergabung :</th>
            <td>{{$data_profiles->tanggaljoins}}</td>
            <th>Rekening :</th>
            <td>{{$data_profiles->rekening}}</td>
          </tr>
          <tr>
            <th>Alamat :</th>
            <td>{{$data_profiles->alamat}}</td>
            <th>Kontrak :</th>
            <td>{{$data_profiles->kontrak}}</td>
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
