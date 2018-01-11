@extends('layouts.special')

@section('meta')
    <meta name="keywords" content="{{$article->keywords}}">
    <meta name="description" content="{{$article->description}}">
@endsection

@section('content')
    <div class="col-md-12">
        <h2 class="text-center">{{$article->title}}</h2>
        <br>
        <h5 class="text-center"><?php echo $auth .'   点击：'.$article->view.'次   发布时间:'.date('Y/m/d',strtotime($article->create_time));?> </h5>
        <hr>
        <?php echo $article->content ?>
    </div>
@endsection