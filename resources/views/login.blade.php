
<!doctype html>
<html lang="en">
  <head>

    {{-- fav icon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    {{-- bootstrap --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/login/css/style.css">

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

    
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
      }

      .content{
        height: 100vh;
        display: flex;
        background: linear-gradient(116.69deg, #F3B125 -19.01%, rgba(255, 214, 96, 0.5) 100%);;
      }

      .card{
        border-radius: 24px;
        height: 55vh;
      }

      .btn{
          width: 100%;
          border-radius: 10px;
      }

    </style>

    <title>MAJAPAHIT.ID | Login</title>
  </head>
  <body>

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="imgtanal/orang.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
        <div class="card">
          <div class="card-body">
              <div class="row justify-content-center">
                <div class="col">
                  <div class="mb-4">
                    <div class="text-center">
                        <h2>Login</h2>
                    </div>
                </div>
                <form action="{{route('postlogin')}}" method="post">
                  @csrf
                  <label for="">Email Address</label>
                  <div class="input-group mb-5">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <label for="">Password</label>
                  <div class="input-group mb-5">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                    <!-- /.col -->
                    <div class="mb-3">
                      <button type="submit" style="background: linear-gradient(90deg, #FF8A23 0%, #F09F13 100%);
                      width: 100%;
                      margin: 0!important;" class="btn align-items-center">Log In</button>
                    </div>
                    <!-- /.col -->
                    <div class="social-auth-links text-center mb-3">
                      <p class="mb-1">
                        <a href="forgot-password.html" style="color: black;" >I forgot my password</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
              
            </div>

          </div>
        </div>
        
      </div>
    </div>
  </div>


    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
    {{-- toatr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    <script>
      @if (Session::has('login'))
        toastr.success("{{Session::get('login')}}")
      @endif
    </script>  
  </body>
</html>