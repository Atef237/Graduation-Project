<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('app_name')}} | {{__('all.login')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard-assets')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('dashboard-assets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard-assets')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
                <a href="{{asset('dashboard-assets')}}/index2.html"><b>  <img src="{{asset('dashboard-assets')}}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"></b></a>
            <p class="login-box-msg">{{__('all.sign_in_welcome_txt')}}</p>

            <form action="{{route('admin.login.post')}}" method="post" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="input-group mb-3 row">

                    @error('email')

                    <label class="control-label col-md-12 text-danger" for="inputError"><i class="far fa-times-circle"></i> {{$message}}</label>
                    @enderror
                    <input class="col-md-12 form-control @error('email') is-invalid @enderror " name="email" value="{{old('email')}}" type="email"
                           required
                           placeholder="{{__('all.email')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                </div>
                <div class="input-group mb-3 row">
                    @error('password')
                    <label class="control-label col-md-12 text-danger" for="inputError"><i class="far fa-times-circle"></i> {{$message}}</label>
                    @enderror
                    <input class="form-control @error('password') is-invalid @enderror " name="password" type="password" required id="password"
                           placeholder="{{__('all.password')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
{{--                    <div class="col-8">--}}
{{--                        <div class="icheck-primary">--}}
{{--                            <input type="checkbox" id="remember">--}}
{{--                            <label for="remember">--}}
{{--                                Remember Me--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{__('all.sign_in')}}</button>
                    </div>
                    <!-- /.col -->
                </div>

            </form>

{{--            <div class="social-auth-links text-center mb-3">--}}
{{--                <p>- OR -</p>--}}
{{--                <a href="#" class="btn btn-block btn-primary">--}}
{{--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-block btn-danger">--}}
{{--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--                </a>--}}
{{--            </div>--}}
            <!-- /.social-auth-links -->

{{--            <p class="mb-1">--}}
{{--                <a href="#">I forgot my password</a>--}}
{{--            </p>--}}
{{--            <p class="mb-0">--}}
{{--                <a href="register.html" class="text-center">Register a new membership</a>--}}
{{--            </p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('dashboard-assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard-assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
