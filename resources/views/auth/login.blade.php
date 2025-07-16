<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <form method="POST" action="/login">
        @csrf
        <h2>Login</h2>

        <input type="email" name="email" placeholder="Your Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>

        <p>
            Don't have an account?
            <a href="/register">Register here</a>
        </p>
    </form>

</body>
</html>
