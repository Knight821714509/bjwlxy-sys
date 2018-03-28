<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    @yield('meta')
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mystyle.css')}}">
    <script src="{{URL::asset('js/jQuery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
</head>
<body style="background-color: #eee;">
<div>
    @include('layouts.header')
</div>
<div class="container">
    <div class="col-md-8 pack" style="min-height: 750px">
        <div class="container-fluid" style="padding-bottom: 30px">
            @yield('content')
        </div>
    </div>
    <div class="hidden-md hidden-lg col-sm-12 col-xs-12" style="height: 30px"></div>
    <div class="col-md-3 col-xs-12 col-sm-12 pull-right pack">
        <h3>热门文章</h3>
        <hr>
        <ul class="list-group">
            @foreach($list as $item)
                <li class="list-group-item"><a style="width: 100px" title="{{$item->title}}" href="{{url('content').'/'.$item->id}}"><p class="myoverflow">{{$item->title}}</p></a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-12 pull-right pack" style="margin-top: 27px">
        <h3>最新文章</h3>
        <hr>
        <ul class="list-group">
            @foreach($newList as $item)
                <li class="list-group-item"><a style="width: 100px" title="{{$item->title}}" href="{{url('content').'/'.$item->id}}"><p class="myoverflow">{{$item->title}}</p></a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="navbar-bottom">
    @include('layouts.footer')
</div>
</body>