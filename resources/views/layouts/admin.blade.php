<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">

    <!--script-->
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body style="background: url({{URL::asset('img/bg.jpg')}}) no-repeat;background-attachment: fixed;background-size: cover;">
<div class="container" style="margin-top: 400px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">提示</div>
                <div class="panel-body">
                    <p>{{ Auth::user()->name }}，欢迎登陆!</p>
                    <p>上次登陆时间：</p>
                    <p>上次登录IP：</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>