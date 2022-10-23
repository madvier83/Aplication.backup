<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        @if(session('error'))<p><small>{{ session('error') }}</small></p> @endif
        <label for="name">Name
            <input type="name" name="name" id="name" value="{{ old('name') }}">
            @error('name')<small>{{ $message }}</small>@enderror
        </label><br><br>
        <label for="email">Email
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')<small>{{ $message }}</small>@enderror
        </label><br><br>
        <label for="password">Password
            <input type="password" name="password" id="password" @if(old('password')) autofocus @endif>
            @error('password')<small>{{ $message }}</small>@enderror
        </label><br><br>
        <label for="cpassword">Confirm Password
            <input type="password" name="cpassword" id="cpassword">
            @error('password')<small>{{ $message }}</small>@enderror
        </label><br><br>
        <button type="submit">Register</button>
    </form>
    <p><br><a href="{{ route('login') }}">Login</a></p>
</body>
</html>