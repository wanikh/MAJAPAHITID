@extends('home')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perizinan Page</h1>
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
                      <i class="" ></i> Majapahit Teknologi
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
                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a href="/showprint/{{$data_items->id}}" rel="noopener" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
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