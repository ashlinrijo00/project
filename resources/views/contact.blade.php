<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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
    <form action="/contact" method="POST">
    @csrf
        <h2 style="text-align: center;">Contact</h2>

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

       <input type="text" name="name" required placeholder ="Name">
    <input type="number" name="age" required placeholder ="Age">
    <input type="email" name="email" required placeholder ="Email">
    <input type="text" name="address" required placeholder ="Place">
        
       <button type="submit">Submit</button>
</form>
</body>
</html>
