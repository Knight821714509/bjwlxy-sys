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
    </style>
    <!--script-->
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>
<iframe src="admin-nav" id="myiframe" width="10%" height="100%" scrolling="no" frameborder="0"></iframe>
<iframe src="admin" class="pull-right" name="mainframe" width="90%" height="100%" scrolling="yes" frameborder="0"></iframe>
</body>
</html>
