<ul class="nav nav-sidebar">
    <li>
        <a href="{{ url('/') }}" style="font-size: 22px">
            {{ config('app.name', 'Laravel') }}
        </a>
    </li>
    &nbsp;<li>
        <a href="#" data-toggle="collapse" data-target="#art" aria-expanded="false" aria-controls="collapseExample">
            <span class="glyphicon glyphicon-bookmark"></span> &nbsp;&nbsp;文章管理
        </a>

        <ul class="collapse nav" id="art">
            <li><a href="{{url('in-art')}}" >添加文章</a></li>
            <li><a href="{{url('sel-art')}}" >编辑文章</a></li>
        </ul>
    </li>
    &nbsp;<li >
        <a href="#" data-toggle="collapse" data-target="#nav" aria-expanded="false" aria-controls="collapseExample">
            <span class="glyphicon glyphicon-tasks"></span>  &nbsp;&nbsp;导航管理
        </a>
        <ul class="collapse nav" id="nav">
            <li><a href="{{url('in-col')}}" >添加栏目</a></li>
            <li><a href="{{url('sel-col')}}" >编辑栏目</a></li>
        </ul>
    </li>
    &nbsp;<li>
        <a href="#" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="collapseExample">
            <span class="glyphicon glyphicon-user"></span>  &nbsp;&nbsp;成员管理
        </a>
        <ul class="collapse nav" id="user">
            <li><a href="{{ url('add-mem')}}" >添加成员</a></li>
            <li><a href="{{ url('del-mem')}}" >删除成员</a></li>
            <li><a href="{{ url('permission') }}" >权限管理</a></li>
        </ul>
    </li>
    &nbsp;<li>
        <a href="#" data-toggle="collapse" data-target="#other" aria-expanded="false" aria-controls="collapseExample">
            <span class="glyphicon glyphicon-cog"></span>  &nbsp;&nbsp;其他设置
        </a>
        <ul class="collapse nav" id="other">
            <li><a href="{{ url('title') }}">网站标题</a></li>
            <li><a href="{{ url('banner') }}">幻灯片管理</a></li>
            <li><a href="{{ url('top') }}">头条文章管理</a></li>
            <li><a href="{{ url('friend') }}">友情链接</a></li>
        </ul>
    </li>
    <li class="nav-divider"></li>
    @guest
        <li><a href="{{ route('login') }}">登录</a></li>
        <li><a href="{{ route('register') }}">注册</a></li>
    @else
        <li>
            <a href="#" data-toggle="collapse" data-target="#name" aria-expanded="false" aria-controls="collapseExample">
                <span class="glyphicon glyphicon-info-sign"></span>  &nbsp;&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="collapse nav" id="name">
                <li><a href="{{ url('info') }}">编辑信息</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        注销
                    </a>
                    <form id="logout-form" target="_parent" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endguest
</ul>