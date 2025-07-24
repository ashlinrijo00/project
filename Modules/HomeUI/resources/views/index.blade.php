<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #111;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px #fff;
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #222;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #fff;
            color: #000;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #ccc;
        }

        .error {
            color: #ff4d4d;
            font-size: 0.9rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Login</h2>

        {{-- Show error messages --}}
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
