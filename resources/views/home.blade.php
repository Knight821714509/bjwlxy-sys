@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">功能列表</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-offset-1 col-md-2 btn btn-info">
                        <a class="btn" href="">文章管理</a>
                    </div>
                    <div class="col-md-offset-2 col-md-2 btn btn-primary">
                        <a class="btn" href="">导航管理</a>
                    </div>
                    <div class="col-md-offset-2 col-md-2 btn btn-success">
                        <a class="btn" href="">成员管理</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
