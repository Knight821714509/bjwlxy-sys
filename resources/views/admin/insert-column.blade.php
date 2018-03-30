@extends('layouts.frame')

@section('form')
    <div class="panel">
        <div class="panel-heading">
            添加栏目
        </div>
        <div class="panel-body">
            <div class="list-group">
                @foreach($col as $item)
                    <div class="list-group-item">
                        {{$item->title}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection