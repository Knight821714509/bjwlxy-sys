@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">功能列表</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-offset-1 col-md-2">
                        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#article" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-bookmark"></span> 文章管理
                        </button>
                        <div class="collapse" id="article">
                            <ul class="list-group list-margin">
                                <li class="list-group-item"><a href="">添加文章</a></li>
                                <li class="list-group-item"><a href="">编辑文章</a></li>
                                <li class="list-group-item"><a href="">删除文章</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-2">
                        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#nav" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-tasks"></span> 导航管理
                        </button>
                        <div class="collapse" id="nav">
                            <ul class="list-group list-margin">
                                <li class="list-group-item"><a href="">添加栏目</a></li>
                                <li class="list-group-item"><a href="">编辑栏目</a></li>
                                <li class="list-group-item"><a href="">删除栏目</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-2">
                        <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#member" aria-expanded="false" aria-controls="collapseExample">
                            <span class="glyphicon glyphicon-user"></span> 成员管理
                        </button>
                        <div class="collapse" id="member">
                            <ul class="list-group list-margin">
                                <li class="list-group-item"><a href="">添加成员</a></li>
                                <li class="list-group-item"><a href="">删除成员</a></li>
                                <li class="list-group-item"><a href="">权限管理</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
