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
                        <li class="breadcrumb-item active">View Perizinan Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        {{-- @if ($message = Session::get('update'))
                <div class="alert alert-success" role="alert">
                  {{$message}}
                </div>
              @endif --}}
        <div class="container-fluid mb-3">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <div class="btn">
                                    <a href="{{ url('perizinanuser') }}" class="btn btn-primary btn-md mb-2">Tambah +</a>
                                </div>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">APPROVE</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NIK</th>
                                    {{-- <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">TANGGAL PENGAJUAN</th> --}}
                                    <th scope="col">JABATAN</th>
                                    {{-- <th scope="col">ATASAN</th>
                            <th scope="col">DEPARTEMEN</th> --}}
                                    <th scope="col">ALASAN CUTI</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data_items as $item)
                                    <tr>
                                        <th scope="profile"> {{ $no++ }} </th>
                                        <td>
                                            @if ($item->status == 1)
                                                <a href="{{ url('perizinanuser-status/' . $item->id) }}"
                                                    class="btn btn-danger btn-sm"> Ditolak </a>
                                            @else
                                                <a href="{{ url('perizinanuser-status/' . $item->id) }}"
                                                    class="btn btn-success btn-sm"> Disetujui </a>
                                            @endif
                                        </td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        {{-- <td>{{$item->tanggallahir}}</td>
                            <td>{{$item->tanggalpengajuan}}</td> --}}
                                        <td>{{ $item->jabatan }}</td>
                                        {{-- <td>{{$item->atasan}}</td>
                            <td>{{$item->departemen}}</td> --}}
                                        <td>{{ $item->alasancuti }}</td>
                                        <td>
                                            <a> <span style="width: 48px;"
                                                    class="badge {{ $item->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ $item->status == 1 ? 'Disetujui' : 'Ditolak' }}</span></a><br>
                                        </td>
                                        <td class="btn-group">
                                            <a href="#"
                                                class="btn btn-icon btn-sm btn-warning btn-active-color-primary editperizinan"
                                                editperizinan-id="{{ $item->id }}"><i class="fas fa-pen"
                                                    style="color: white"></i></a>

                                            <a href="{{ url('show/' . $item->id) }}"
                                                class="btn btn-sm btn-icon btn-success btn-active-color-primary "><i
                                                    class="fas fa-eye" style="color: white"></i></a>

                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-danger btn-active-color-primary deleteperizinan"
                                                perizinan-id="{{ $item->id }}" data_request-id="#"><i
                                                    class="fas fa-trash-alt" style="color:white"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
