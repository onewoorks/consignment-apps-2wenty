
<html>
    <head>
        <title>Consigment Apps</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @laravelPWA
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css')}}" />
    </head>
    <body> 
        @yield('header')
        <div class="container">
            @yield('content')
        </div>
    @include('layout.footer')
    </body>
</html>

