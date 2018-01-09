@extends('layouts.special')
@section('content')
    <div class="col-md-12">
        <ul class="list-group list-margin">
            @foreach($titleList as &$item)
            <li class="list-group-item">
                <a title="{{$item->title}}" href="content/{{$item->id}}">
                    {{$item->title}}
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