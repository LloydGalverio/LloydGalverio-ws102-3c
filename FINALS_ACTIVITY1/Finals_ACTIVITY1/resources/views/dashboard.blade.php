<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Basic Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color:rgb(0, 0, 0);
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .logout-btn {
            width: 100%;
            padding: 12px;
            background-color:rgb(236, 4, 4);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

    
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Your Dashboard!</h1>
        <p>You are successfully logged in as {{ Auth::user()->name }}.</p>

        <!-- Logout button -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

</body>
</html>
