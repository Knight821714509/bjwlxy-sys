@extends('layouts.special')

@section('content')
    <div class="col-md-12">
        <h2>{{$article->title}}</h2>
        <h6 class="text-center"><?php echo $auth .'   点击：'.$article->view.'次   发布时间:'.date('m-d',$article->create_time);?> </h6>
        <hr>
        <?php echo $article->content ?>
    </div>
@endsection