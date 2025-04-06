<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2e8f0; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .login-container {
            background: #ffffff; 
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color:rgb(0, 0, 0); 
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: #f9fafb; 
        }

     

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color:rgb(26, 160, 201); 
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

       

        .error-message {
            color: #ff4d4f; 
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>


        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <div>
                <button type="submit" class="login-btn">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
