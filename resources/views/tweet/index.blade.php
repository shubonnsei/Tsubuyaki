<!doctype html>
<html lang="ja">
<head>    
    <meta charset="UTF-8>
    <meta name="viewport" context="width=device-width, user_scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatiable" content="ie=edge>"
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    <div>
        @foreach($tweets as $tweet)
            <p>{{ $tweet->contents }}</p>
        @endforeach
    </div>
</body>
</html>
