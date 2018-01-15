<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            margin: 0;
            padding: 0;
            position: absolute;
            height: 100%;
            width: 100%
        }
        @yield('style')
    </style>
    <!--script-->
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body style="background: url({{URL::asset('img/bg.jpg')}}) no-repeat;background-attachment: fixed;background-size: cover;">
<div class="col-md-2 sidebar">
    @include('layouts.admin-nav')
</div>
<div class="col-md-offset-2">
    <div class="container" style="margin-top: 30px">
        @section('form')
            <div class="row" style="margin-top: 400px">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">提示</div>
                        <div class="panel-body">
                            <p>{{ Auth::user()->name }}，欢迎登陆!</p>
                            <p>上次登陆时间：@yield('time')</p>
                            <p>上次登录IP：@yield('ip')</p>
                        </div>
                    </div>
                </div>
            </div>
        @show
    </div>
</div>
</body>
</html>
