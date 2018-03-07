@extends('layouts.frame')

@section('form')
    <div class="panel">
        <div class="panel-heading">
            编辑文章
        </div>
        <div class="panel-body">
            <form action="">
                <label for="category">分类选择</label>
                <select name="category" id="category">
                    <option value="">学院动态</option>
                </select>
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($newList as &$item)
                            <tr><td>{{$item->title}}</td><td><a href="" class="btn btn-info btn-sm">编辑</a></td><td><a
                                            href="" class="btn btn-danger btn-sm">删除</a></td></tr>
                        @endforeach
                    <tr><td>{{$newList->links()}}</td></tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection