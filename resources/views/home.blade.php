<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            background-color: #121212;
            color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 60px;
            font-size: 2.5rem;
            color: #f39c12;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        button {
            background-color: #f39c12;
            color: #121212;
            padding: 10px 20px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans flex items-center justify-center min-h-screen">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-yellow-400 mb-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="text-lg mb-6">You are logged in.</p>

        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-2 rounded-md">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
