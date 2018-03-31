@extends('layouts.frame')

@section('form')
    <div class="panel">
        <div class="panel-heading">
            添加栏目
        </div>
        <div class="panel-body">
            <a class="btn btn-info" href="" data-toggle="modal" data-target="#insert">添加</a>

            <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">添加栏目名</h4>
                        </div>
                        <div class="modal-body">
                            <input class="form-control" type="text" name="title" placeholder="请输入……">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary">确定</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group list-margin">
                @foreach($col as $item)
                    <div class="list-group-item">
                        {{$item->title}}
                        {{--<input type="checkbox" id="{{$item->id}}" name="{{$item->id}}" value="{{$item->id}}">--}}
                        {{--<label for="{{$item->id}}">{{$item->title}}</label>--}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection