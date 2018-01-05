<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <script src="{{URL::asset('js/jQuery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="container-fluid">
        <h1><?php echo $article['title']?></h1>
        <h3><?php echo $article['auth'] ?></h3>
        <?php echo $article['content'] ?>
    </div>
</div>
</body>