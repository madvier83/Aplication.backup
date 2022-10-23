<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- @dd(session()) --}}
    <h1>Welcome back, {{ auth()->user()->name }}</h1>
    <p>Logged in as {{ auth()->user()->email }}</p>

    <form action="{{ route('logout', auth()->user()) }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>