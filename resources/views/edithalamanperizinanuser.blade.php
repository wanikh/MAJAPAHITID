@extends('home')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">

            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Perizinan Page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="home">Home</a></li>
                  <li class="breadcrumb-item active">Perizinan Page</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
          <div class="container-fluid">
            <form action="/update/{{$data_items->id}}" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda" value="{{$data_items->nama}}">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nik</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK Anda" value="{{$data_items->nik}}">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">Tanggal Lahir</label>
                  <div class="position-relative d-flex align-items-center w-200px">
                    <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggallahir" value="{{$data_items->tanggallahir}}">
                  </div> 
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal Pengajuan</label>
                <div class="position-relative d-flex align-items-center w-200px">
                  <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggalpengajuan" value="{{$data_items->tanggalpengajuan}}">
                </div> 
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="nik" placeholder="" value="{{$data_items->jabatan}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Atasan</label>
              <input type="text" class="form-control" name="atasan" id="nik" placeholder="" value="{{$data_items->atasan}}">
            </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Departemen</label>
                <select class="form-control" name="departemen" id="departemen" value="{{$data_items->departemen}}">
                  <option>Support</option>
                  <option>IT</option>
                  <option>HR</option>
                  <option>Finance</option>
                  <option>Digital Marketing</option>
                  <option>Top Management</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Alasan Cuti</label>
                <textarea class="form-control" name="alasancuti" id="alasancuti" value="" rows="3">{{$data_items->alasancuti}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">submit
              </button>
            </form>
          </div>
        </div>
          </div>
        </div>
@endsection