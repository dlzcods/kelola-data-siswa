<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kelola Data Siswa</title>
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/sweetalert2.all.js') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('dist/sweetalert2.all.js') }}"></script>  
    </body>
</html>