<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('bab3/layouts/v_nav')
    @yield('content')
    @include('bab3/layouts/v_footer')
    
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
</body>
</html>