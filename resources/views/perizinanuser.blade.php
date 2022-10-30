@extends('home')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{$message}}
                </div>
              @endif --}}
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
                    <form action="{{ route('posthalamanperizinanuser') }}" method="post">
                        @csrf
                        <div class="row gx-10 mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukkan Nama Anda">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nik</label>
                                    <input type="number" class="form-control" name="nik" id="nik"
                                        placeholder="Masukkan NIK Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row gx-10 mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                    <div class="position-relative d-flex align-items-center w-200px">
                                        <input type="date" class="form-control form-control-transparent fw-bolder pe-5"
                                            placeholder="Select date" name="tanggallahir" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Pengajuan</label>
                                    <div class="position-relative d-flex align-items-center w-200px">
                                        <input type="date" class="form-control form-control-transparent fw-bolder pe-5"
                                            placeholder="Select date" name="tanggalpengajuan" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gx-10 mb-3">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" id="nik" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Atasan</label>
                                    <input type="text" class="form-control" name="atasan" id="nik" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Departemen</label>
                            <select class="form-control" name="departemen" id="departemen">
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
                            <textarea class="form-control" name="alasancuti" id="alasancuti" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
