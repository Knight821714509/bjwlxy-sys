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
<body style="background-color: #222222">
<div id="app">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div>
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-bookmark"></span> &nbsp;&nbsp;文章管理
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="" target="mainframe">添加文章</a></li>
                            <li><a href="" target="mainframe">编辑文章</a></li>
                            <li><a href="" target="mainframe">删除文章</a></li>
                        </ul>
                    </li>
                    &nbsp;<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-tasks"></span>  &nbsp;&nbsp;导航管理
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="" target="mainframe">添加栏目</a></li>
                            <li><a href="" target="mainframe">编辑栏目</a></li>
                            <li><a href="" target="mainframe">删除栏目</a></li>
                        </ul>
                    </li>
                    &nbsp;<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>  &nbsp;&nbsp;成员管理
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="" target="mainframe">添加成员</a></li>
                            <li><a href="" target="mainframe">删除成员</a></li>
                            <li><a href="" target="mainframe">权限管理</a></li>
                        </ul>
                    </li>
                    &nbsp;<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-cog"></span>  &nbsp;&nbsp;其他设置
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="" target="mainframe">网站标题</a></li>
                            <li><a href="" target="mainframe">幻灯片管理</a></li>
                            <li><a href="" target="mainframe">头条文章管理</a></li>
                        </ul>
                    </li>
                    <li class="nav-divider"></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">登录</a></li>
                        <li><a href="{{ route('register') }}">注册</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-info-sign"></span>  &nbsp;&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="" target="mainframe">编辑信息</a></li>
                                <li>
                                    <a href="javascript:logout()" target="_top">
                                        注销
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<script type="text/javascript">
    function logout() {
        event.preventDefault();
        document.getElementById('logout-form').submit();
        window.location.href="{{ route('logout') }}";
    }
</script>
</body>
</html>