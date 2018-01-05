<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <script src="{{URL::asset('js/jQuery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>

    <style>
        .fontlink{
            color: #000000;
            font-size:20px ;
            font-weight: 700;


        }
        .contentlink{
            color: #333333;
            font-size: 16px;
        }
        .divstyle{
            margin-top: 20px;

        }
        a:hover{
            color: blue;
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
        #footer{
            border-bottom: #ffffff 1px solid;
            border-top:#ffffff 1px solid;
            margin-top: 20px;

        }
        .padding-0{
            padding: 0;
        }
    </style>
</head>
<body style="background: url({{URL::asset('img/1.jpg')}}) no-repeat;background-attachment: fixed;background-size: cover;">
<div class="container" style="margin-top: 50px;padding: 0;background-color: #ffffff;margin-bottom: 50px;">
    <nav class="navbar navbar-default"style="margin-bottom: 0px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
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
                <img src="img/1.jpg" alt="First slide">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="Third slide">
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
            <img src="{{URL::asset('img/1.jpg')}}" alt="" width="100%">
            <div class="text-center">
                <a class="fontlink" href="https://www.baidu.com">文章标题</a>

            </div>
            <div>
                <a class="contentlink" href="">aaaaaaaaaaaaaaaaaaaaaaaaaa <br> <br>  <br> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="divstyle">
                <a class="fontlink" href="">文章标题</a>
                <hr>
                <a class="contentlink" href="">DDDDDDDD</a>
            </div>

            <div  class="divstyle">
                <a class="fontlink" href="">文章标题</a>
                <hr>
                <a class="contentlink" href="">DDDDDDDD</a>
            </div>
            <div  class="divstyle">
                <a class="fontlink" href="">文章标题</a>
                <hr>
                <a class="contentlink" href="">DDDDDDDD</a>
            </div>
            <div class="divstyle" >
                <a class="fontlink" href="">文章标题</a>
                <hr>
                <a class="contentlink" href="">DDDDDDDD</a>
            </div>

        </div>
        <div class="bs-example bs-example-tabs col-md-12" data-example-id="togglable-tabs" style="margin-top: 50px;margin-bottom: 50px">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active col-md-3 padding-0"><a href="#home" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
                <li role="presentation" class="col-md-3 padding-0"><a href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
                <li role="presentation" class="col-md-3 padding-0"><a href="#dropdown1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
                <li role="presentation" class="col-md-3 padding-0"><a href="#dropdown2" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
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
<div style="background-color:#9d9d9d;padding: 0px;" class="col-md-12">
    <div id="footer" >
        <p class="text-center contentlink" style="margin-top: 30px;margin-bottom: 30px">友情链接</p>

    </div>

    <div>
        <p class="text-center contentlink" style="margin-top: 20px;margin-bottom: 20px">版权信息</p>
    </div>
</div>
</body>
</html>