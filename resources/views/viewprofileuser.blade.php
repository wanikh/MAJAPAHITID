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
            <li class="breadcrumb-item active">View Profile Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid mb-3">
        <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACTION</th>
                        </tr>
                        @php
                          $no = 1;  
                        @endphp
                        @foreach($data_profiles as $profile)
                        <tr>
                            <th scope="profile"> {{$no++}} </th>
                            <td>
                              <img src="{{asset('fotoprofile/'. $profile->foto)}}" alt="" style="width: 200px;" >
                            </td>
                            <td>{{$profile->nama}}</td>
                            <td>{{$profile->email}}</td>
                            <td>
                                {{-- <a href="/edit/{{$profile->id}}" class="btn btn-icon btn-warning btn-active-color-primary "><i class="fas fa-pen" style="color: white"></i></a> --}}

                                <a href="{{url('/show-profile-user/'.$profile->id)}}" class="btn btn-icon btn-success btn-active-color-primary "><i class="fas fa-eye" style="color: white"></i></a>

                                {{-- <a href="{{url('/delete/'.$item->id)}}" class="btn btn-icon btn-danger btn-active-color-primary" data_request-id="#"><i class="fas fa-trash-alt" style="color:white"></i></a> --}}
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