<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>
        <a href="{{ url('/register') }}">Register</a>
    </p>
</body>
</html>
