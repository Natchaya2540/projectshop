@extends('layouts.app')

@section('content')

<?php
// include "config.php";
?>
    <!DOCTYPE html>
<html lang="{{ str_replace('_','_', app() ->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pavara') }}</title>
    <link rel="icon" type="image/png" href="https://png.pngtree.com/svg/20170831/d323f01e9c.png" />

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12"> <img src="https://pavaraclean.com/promotion/prm_5b118718d62ae.png" width="100%" height="100%" > </div>
{{--                        <div class="col-lg-3"></div>--}}
{{--                        <div class="col-lg-5">--}}
{{--                            <div class="text-center"><br>--}}
{{--                                <h1 class="h4 text-gray-900 mb-4 font-weight-bolder ">Welcome</h1>--}}
{{--                            </div>--}}

{{--                            <form role="form" method="POST" action="{{route('login')}}">--}}
{{--                               @csrf--}}
{{--                                @error('email')--}}
{{--                                <div class="text-red text-center">--}}
{{--                                    <strong>{{ $message}}</strong>--}}
{{--                                </div>--}}
{{--                                @enderror--}}
{{--                                @error('password')--}}
{{--                                <div class="text-red text-center">--}}
{{--                                    <strong>{{ $message}}</strong>--}}
{{--                                </div>--}}
{{--                                @enderror--}}
{{--                            <div class="form-group mb-3 mt-3">--}}
{{--                                <div class="input-group input-group-alternative">--}}
{{--                                    <div class ="input-group-prepend">--}}
{{--                                        <span class ="input-group-text"><img src="http://www.manugraph.com/img/loginIcon.png" width="22px " height="22px"><i class="ni ni-lock-circle-open"></i></span>--}}
{{--                                    </div>--}}
{{--                                <input id="email" type="email"--}}
{{--                                class="form-control @error('email') is-invalid @enderror"--}}
{{--                                name="email" value="{{ old('email') }}"--}}
{{--                                       required autofocus>--}}
{{--                                </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group ">--}}
{{--                                    <div class="input-group input-group-alternative">--}}
{{--                                        <div class ="input-group-prepend">--}}
{{--                                            <span class ="input-group-text"><img src="https://www.atmedics.com/wp-content/uploads/2016/02/logo-login.png" width="22px " height="22px"><i class="ni ni-lock-circle-open"></i></span>--}}
{{--                                        </div>--}}
{{--                                        <input id="password" type="password"--}}
{{--                                               class="form-control @error('email') is-invalid @enderror"--}}
{{--                                               name="password" required autofocus="current-password">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                <div class="custom-control custom-control-checkbox custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheckLogin"--}}
{{--                                    {{old('remember') ? 'checked':''}}>--}}
{{--                                    <label class="custom-control-label" for="customCheckLogin">--}}
{{--                                        <span class="text-muted">{{_('Remember me')}}</span></label><br>--}}
{{--                                </div>--}}
{{--                                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-user btn-block">--}}
{{--                                    เข้าสู่ระบบ--}}
{{--                                </a>--}}
{{--                            </form>--}}
{{--                            <hr>--}}
{{--                            <div class="text-center">--}}
{{--                                <a class="small" href="forgot-password.html">ลืมรหัสผ่าน ?</a>--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <a class="small" href="{{ route('register') }}">สร้างผู้ใช้ใหม่</a><br>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
                        <div class="container mt--8 pb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-7">
                                    <div class="card bg-white shadow border-0">

                                        <div class="card-body px-lg-5 pt-lg-5">
                                            <div class="text-center text-muted mb-7 font-weight-bolder  ">
                                                <font size="7">  Welcome </font>
                                            </div>
                                            <form role="form"  method="POST" action="{{ route('login') }}">
                                                @csrf
                                                @error('email')
                                                <div class="text-red text-center">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                                @error('password')
                                                <div class="text-red text-center">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror

                                                <div class="form-group mb-3 mt-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><img src="http://exploringmauritius.com/img/avatar.png"  wight=22px height=22px"><i class="ni ni-email-83"></i></span>
                                                        </div>
                                                        <input id="email" type="text"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}"
                                                               required autofocus>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><img src="https://cdn0.iconfinder.com/data/icons/flat-security-icons/512/lock-open-blue.png"  wight=22px height=22px"><i class="ni ni-lock-circle-open"></i></span>
                                                        </div>
                                                        <input id="password" type="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               name="password" required autocomplete="current-password">
                                                    </div>
                                                </div>
                                                <div class="custom-control custom-control-alternative custom-checkbox">
                                                    <input class="custom-control-input" id=" customCheckLogin"
                                                           type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for=" customCheckLogin">
                                                        <span class="text-primary">{{ __('Remember Me') }}</span>
                                                    </label>
                                                </div>


                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </form>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-8 font-weight-bold">
                                            @if (Route::has('password.request'))
                                        <a class="text-primary" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                           </a>
                                            @endif
                                        </div>
                                        <div class="col-5 font-weight-bold">
                                           <a href="{{ route('register') }}" class="text-primary">Create new account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>

</div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>
   @yield ('script')
        </div>

</body>

</html>

@endsection
