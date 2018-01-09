@extends('layouts.special')
@section('content')
    <div class="col-md-12">
        <ul class="list-group list-margin">
            @foreach($titleList as &$item)
            <li class="list-group-item">
                <a title="{{$item->title}}" href="{{url('content').'/'.$item->id}}">
                    {{$item->title}}
                    <span class="pull-right">{{date('y/m/h',$item->create_time)}}</span>
                </a>
            </li>
                <br>
            @endforeach
        </ul>
        <div>
            {{$titleList->links()}}
        </div>
    </div>
@endsection