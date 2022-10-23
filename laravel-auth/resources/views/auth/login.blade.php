<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        @if(session('error'))<p><small>{{ session('error') }}</small></p> @endif
        <label for="email">Email
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </label><br><br>
        <label for="password">Password
            <input type="password" name="password" id="password" @if(old('password'))autofocus @endif>
        </label>
        <button type="submit">Login</button>
    </form>
    <p><br><a href="{{ route('register') }}">Register</a></p>
</body>
</html>