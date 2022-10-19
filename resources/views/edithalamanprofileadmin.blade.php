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
          <div class="container-fluid">
            <form action="/update-profile/{{$data_profiles->id}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama"  placeholder="Masukkan Nama Anda" value="{{$data_profiles->nama}}">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="name@example.com" value="{{$data_profiles->email}}">
                  </div>
                </div>
              </div>
    
              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Departemen</label>
                    <select class="form-control" name="departemens" value="{{$data_profiles->departemens}}">
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
                    <input type="text" class="form-control" name="jabatans" value="{{$data_profiles->jabatans}}">
                  </div>
                </div>
              </div>
    
              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nik</label>
                    <input type="text" class="form-control" name="niks" value="{{$data_profiles->niks}}" placeholder="Masukkan NIK Anda">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatlahir" value="{{$data_profiles->tempatlahir}}" placeholder="">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Tanggal Lahir</label> 
                      <div class="position-relative d-flex align-items-center w-200px">
                        <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggallahirs" value="{{$data_profiles->tanggallahirs}}" >
                      </div> 
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Usia</label>
                    <input type="text" class="form-control" name="usia" value="{{$data_profiles->usia}}" placeholder="Contoh : 22">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select class="form-control" name="jeniskelamin" value="{{$data_profiles->jeniskelamin}}">
                      <option>Perempuan</option>
                      <option>Laki-Laki</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" value="{{$data_profiles->alamat}}" name="alamat" placeholder="Jl. Rajawali">
                  </div>
                </div>
              </div>

              <div class="row gx-10 mb-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pendidikan</label>
                    <select class="form-control" name="pendidikan" value="{{$data_profiles->pendidikan}}">
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
                    <select class="form-control" name="statuspernikan" value="{{$data_profiles->statuspernikan}}">
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
                      <input type="text" value="{{$data_profiles->agama}}" class="form-control" name="agama">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kewarganegaraan</label>
                      <select class="form-control" name="kewarganegaraan" value="{{$data_profiles->kewarganegaraan}}">
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
                      <input type="text" value="{{$data_profiles->nohp}}" class="form-control" name="nohp" placeholder="+62">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Status Karyawan</label>
                      <select class="form-control" name="statuskaryawan">
                        <option selected>{{$data_profiles->statuskaryawan}}</option>
                        <option value="">Tetap</option>
                        <option value="">Kontrak</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Join</label>
                        <div class="position-relative d-flex align-items-center w-200px">
                          <input type="date" class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="tanggaljoins" value="{{$data_profiles->tanggaljoins}}">
                        </div> 
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Kontrak</label>
                      <input type="text" class="form-control" value="{{$data_profiles->kontrak}}" name="kontrak" placeholder="Hitungan Dalam Bulan">
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">BPJS KETENAGAKERJAAN</label>
                      <input type="text" class="form-control" value="{{$data_profiles->bpjsketenagakerjaan}}" name="bpjsketenagakerjaan" placeholder="Masukkan Nomor BPJS KETENAGAKERJAAN Anda">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">BPJS KESEHATAN</label>
                      <input type="text" class="form-control" value="{{$data_profiles->bpjskesehatan}}" name="bpjskesehatan" placeholder="Masukkan Nomor BPJS KESEHATAN Anda">
                    </div>
                  </div>
                </div>

                <div class="row gx-10 mb-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">NPWP</label>
                      <input type="text" class="form-control" value="{{$data_profiles->npwp}}"  name="npwp" placeholder="Masukkan Nomor NPWP Anda">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Rekening</label>
                      <input type="text" class="form-control" value="{{$data_profiles->rekening}}"  name="rekening" placeholder="Masukkan Rekening Anda">
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