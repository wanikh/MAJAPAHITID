@extends('home')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">

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
              {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{$message}}
                </div>
              @endif --}}
          <div class="container-fluid">
            <form action="{{route('posthalamanprofileuser')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="exampleFormControlInput1">Masukkan Foto Anda</label>
                <input type="file" class="form-control" name="foto" >
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama"  placeholder="Masukkan Nama Anda">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="name@example.com">
                  </div>
                </div>
              </div>
    
              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Departemen</label>
                    <select class="form-control" name="departemens">
                      <option>Support</option>
                      <option>IT</option>
                      <option>HR</option>
                      <option>Finance</option>
                      <option>Digital Marketing</option>
                      <option>Top Management</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatans" placeholder="">
                  </div>
                </div>
              </div>
    
              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nik</label>
                    <input type="text" class="form-control" name="niks" placeholder="Masukkan NIK Anda">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatlahir" placeholder="">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Tanggal Lahir</label>
                      <div class="position-relative d-flex align-items-center w-200px">
                        <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggallahirs" value="">
                      </div> 
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Usia</label>
                    <input type="text" class="form-control" name="usia" placeholder="Contoh : 22">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" name="jeniskelamin">
                      <option>Perempuan</option>
                      <option>Laki-Laki</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Jl. Rajawali">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pendidikan</label>
                    <select class="form-control" name="pendidikan">
                      <option>SD</option>
                      <option>SMP</option>
                      <option>SMA</option>
                      <option>S1</option>
                      <option>S2</option>
                      <option>S3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Status Pernikahan</label>
                    <select class="form-control" name="statuspernikan">
                      <option>Belum Menikah</option>
                      <option>Sudah Menikah</option>
                      <option>Anak = 1</option>
                      <option>Anak > 1</option>
                    </select>
                  </div>
                </div>
              </div>
                
                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Agama</label>
                      <input type="text" class="form-control" name="agama">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kewarganegaraan</label>
                      <select class="form-control" name="kewarganegaraan">
                        <option>WNI</option>
                        <option>WNA</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">No Handphone</label>
                      <input type="text" class="form-control" name="nohp" placeholder="+62">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Status Karyawan</label>
                      <select class="form-control" name="statuskaryawan">
                        <option value="0">Tetap</option>
                        <option value="1">Kontrak</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Join</label>
                        <div class="position-relative d-flex align-items-center w-200px">
                          <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggaljoins" value="">
                        </div> 
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Kontrak</label>
                      <input type="text" class="form-control" name="kontrak" placeholder="Hitungan Dalam Bulan">
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">BPJS KETENAGAKERJAAN</label>
                      <input type="text" class="form-control" name="bpjsketenagakerjaan" placeholder="Masukkan Nomor BPJS KETENAGAKERJAAN Anda">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">BPJS KESEHATAN</label>
                      <input type="text" class="form-control" name="bpjskesehatan" placeholder="Masukkan Nomor BPJS KESEHATAN Anda">
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">NPWP</label>
                      <input type="text" class="form-control" name="npwp" placeholder="Masukkan Nomor NPWP Anda">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Rekening</label>
                      <input type="text" class="form-control" name="rekening" placeholder="Masukkan Rekening Anda">
                    </div>
                  </div>
                </div>

              <button type="submit" href="#" class="btn btn-primary">submit
              </button>
            </form>
          </div>
        </div>
          </div>
          </div>
@endsection