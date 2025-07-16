<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            background-color: #121212;
            color: #eee;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            width: 320px;
        }
        input, button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            background: #2c2c2c;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        button {
            background: #f39c12;
            cursor: pointer;
        }
        button:hover {
            background: #e67e22;
        }
        .error {
            color: #ff4d4d;
            font-size: 0.9rem;
        }
        a {
            color: #f39c12;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <h2 style="text-align: center;">Register</h2>

        {{-- Success message --}}
        @if(session('success'))
            <p style="color: lightgreen;">{{ session('success') }}</p>
        @endif

        {{-- Validation errors --}}
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        
        <button type="submit">Register</button>

        <p style="text-align:center;">Already have an account? <a href="/login">Login here</a></p>
    </form>
</body>
</html>
