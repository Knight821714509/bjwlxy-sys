<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <script src="{{URL::asset('js/jQuery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <style>
        .pack{
            background-color: #FFF;
            border-radius: 20px;
            box-shadow: 11px 9px 10px #888;
        }
    </style>
</head>
<body style="background-color: #ccc;">
<div class="container">
    <div class="container-fluid">
        <div class="col-md-8 pack">
            <h1><?php echo $article['title']?></h1>
            <h3><?php echo $article['auth'] ?></h3>
            <?php echo $article['content'] ?>
        </div>
        <div class="col-md-4 pack">

        </div>
    </div>
</div>
</body>