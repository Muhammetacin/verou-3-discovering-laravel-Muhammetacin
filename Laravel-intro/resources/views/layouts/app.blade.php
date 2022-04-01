<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>--}}

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel Introduction</title>
</head>
<body>
    <div class="flex flex-col items-center justify-between min-h-screen">
        @include('layouts._partials.header')

        @yield('home')

        @yield('welcome')

        @yield('welcome-tailwind')

        @yield('about')

        @include('layouts._partials.footer')
    </div>

    @if(session()->has('success'))
        <div class="text-center fixed-top bg-success text-white">
            <p class="pt-3">{{ session('success') }}</p>
        </div>
    @endif
</body>
</html>
