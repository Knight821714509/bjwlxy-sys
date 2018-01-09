<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mystyle.css')}}">
    <script src="{{URL::asset('js/jQuery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <style>
        a:hover{
            color: gray;
            text-decoration: none;
        }
        hr{
            margin-bottom: 10px;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
            background-color: #1b6d85;
            color: #ffffff;
            width: 100%;
            border: 1px solid #333333;
        }
        .nav-tabs > li > a{
            border-radius: 4px 4px 4px 4px;
            border: 1px solid #333333;
        }
        .navbar{
            margin: 0;
        }
    </style>
</head>
<body style="background: url({{URL::asset('img/bg.jpg')}}) no-repeat;background-attachment: fixed;background-size: cover;">
<div class="body-mask" style="z-index: -9"></div>
<div style="padding-top: 50px">
    <div class="container" style="padding: 0;background-color: #ffffff;padding-bottom: 50px">
        @include('layouts.header')
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/1.jpg" alt="First slide" width="100%">
                </div>
                <div class="item">
                    <img src="img/2.jpg" alt="Second slide" width="100%">
                </div>
                <div class="item">
                    <img src="img/3.jpg" alt="Third slide" width="100%">
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="col-md-12">
            <div class="text-center" style="margin-top: 40px;margin-bottom: 50px">
                <h1>学院动态</h1>
            </div>
            <div class="col-md-6">
                <img src="http://p0.ifengimg.com/fck/2017_17/77686f0632b8895_w800_h545.jpg" alt="" width="100%">
                <div class="text-center">
                    <a class="fontlink" href="https://www.baidu.com">文章标题</a>
                </div>
                <div>
                    <a class="contentlink" href="home">aaaaaaaaaaaaaaaaaaaaaaaaaa <br> <br>  <br> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
                </div>
            </div>
            <div class="col-md-6">
                @foreach($xydt as &$item)
                <div class="divstyle">
                    <a class="fontlink" href="content/{{$item->id}}">
                        <p class="myoverflow">{{$item->title}}</p>
                        <p class="contentlink">{{$item->description}}</p>
                        <p class="contentlink text-right">{{date('y/m/d',$item->create_time)}}</p>
                    </a>
                    <hr>
                </div>
                @endforeach
            </div>
            <div class="bs-example bs-example-tabs col-md-12" data-example-id="togglable-tabs" style="margin-top: 50px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active col-md-3 col-xs-3 padding-0"><a href="#home" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
                    <li role="presentation" class="col-md-3 col-xs-3 padding-0"><a href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
                    <li role="presentation" class="col-md-3 col-xs-3 padding-0"><a href="#dropdown1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
                    <li role="presentation" class="col-md-3 col-xs-3 padding-0"><a href="#dropdown2" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
                </ul>
                <div id="myTabContent" class="tab-content" style="margin-top: 50px">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        @foreach($zzjg as &$item)
                            <div class="divstyle col-md-6">
                                <a class="fontlink" href="content/{{$item->id}}">
                                    <p class="myoverflow">{{$item->title}}</p>
                                    <p class="contentlink">{{$item->description}}</p>
                                    <p class="contentlink text-right">{{date('y/m/d',$item->create_time)}}</p>
                                </a>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div><div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div><div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div><div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>
                        </div>
                        <div class="divstyle col-md-6">
                            <a href="" class="fontlink">文章标题</a>
                            <hr>
                            <a href="" class="contentlink">dddddddddddddddd</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>