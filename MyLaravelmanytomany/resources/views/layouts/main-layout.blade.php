<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Many To Many</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                @include('components.header')
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                @include('components.footer')
            </div>
        </div>
    </div>
</body>
</html>
