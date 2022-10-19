@extends('home')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Perizinan Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Note:</h5>
                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
              </div>
  
  
              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h3>
                      <i class=""></i>Majapahit Teknologi
                    </h3>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
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
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a href="{{url('/show-profile-user-pdf/'.$data_profiles->id)}}" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    </div>
@endsection