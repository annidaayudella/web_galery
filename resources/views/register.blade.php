<!DOTCYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Web Galeri| register</title>

    <!--Google Font: Source Sans Pro-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!--Font Awasome-->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawasome-free/css/all.min.css')}}">
    <!--icheck bootstrap-->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css) }}">
    <!--Theme style-->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition regiter-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ asset('Adminlte/index2.html') }}" class="h1"><b>Web</b>GALERI</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ url('postregis') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full name">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                   </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Full username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                   </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                   </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                        </label>
                   </div>
                </div>
                <!--/.col-->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
               </div>
               <!--/.col-->
            </div>
       </form>
       
       {{-- <div class="secial-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
            <i class=" fab fa-facebook mr-2"></i>
            Sign Up Using Facebook
       </a>
       <a href="#" class="btn btn-block btn-danger">
        <i class="fab fa-google-plus mr-2"></i>
        Sign Up Using Google+
       </a>
       </div>--}}

       <a href="{{ url('/') }}" class="text-center">I already have a membership</a>
    </div>
    <!--form-box-->
    </div>
    <!--/.card-->
    </div>
    </div>
    <!--/.register-box-->

    <!--jQuery-->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js) }}"></script>
    <!--Bootstrap 4-->
    <script src="{{ asset('AdminLTE/plugins/Bootstrap/js/bootsrap.bundle.min.js) }}"></script>
    <!--AdminLTE-->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js) }}"></script>
</body>
</html>





