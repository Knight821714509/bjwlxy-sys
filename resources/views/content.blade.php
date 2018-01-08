@extends('layouts.list')

@section('content')
    <h1><?php echo $article->title?></h1>
    <h3><?php echo $auth .'   点击：'.$article->view.'次   发布时间:'.date('yyyy-MM-dd HH:mm:ss',$article->create_time);?> </h3>
    <?php echo $article->content ?>
@endsection