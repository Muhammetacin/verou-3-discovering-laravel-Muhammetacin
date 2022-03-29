<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My hello welcome page</title>
</head>
<body>
    <h1>My welcome page</h1>
    <button><a href="{{ route('home') }}">Back to home</a></button>
    <button><a href="{{ route('about') }}">About me</a></button>
</body>
</html>
