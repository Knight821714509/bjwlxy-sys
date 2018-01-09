<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
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
    <div class="container-fluid">
        <div class="col-md-8 pack" style="min-height: 750px">
            @yield('content')
        </div>
        <div class="col-md-3 pull-right pack">
            <h3>热门文章</h3>
            <hr>
            <ul class="list-group">
                @foreach($list as $item)
                    <li class="list-group-item"><a style="width: 100px" title="{{$item->title}}" href="{{url('content').'/'.$item->id}}"><p class="myoverflow">{{$item->title}}</p></a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-3 pull-right pack" style="margin-top: 27px">
            <h3>最新文章</h3>
            <hr>
            <ul class="list-group">
                @foreach($newList as $item)
                    <li class="list-group-item"><a style="width: 100px" title="{{$item->title}}" href="{{url('content').'/'.$item->id}}"><p class="myoverflow">{{$item->title}}</p></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="navbar-bottom">
    @include('layouts.footer')
</div>
</body>