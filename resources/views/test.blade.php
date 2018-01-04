<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
    <script src="../../public/js/jQuery.js"></script>
    <script src="../../public/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <div>
        <div><h1>{{$Article['title']}}</h1></div>
        <div><h2>{{$Article['auth']}}</h2></div>
        <div><h3>{{$Article['content']}}</h3></div>
    </div>
</div>
</body>
</html>