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
                    <tr>
                        @foreach($newList as &$item)
                            <td>{{$item->title}}</td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection