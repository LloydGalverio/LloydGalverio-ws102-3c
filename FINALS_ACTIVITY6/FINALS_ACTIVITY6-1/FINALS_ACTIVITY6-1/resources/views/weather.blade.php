<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Report</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #eef2f3;
            color: #333;
        }

        header {
            text-align: center;
            padding: 2rem 1rem;
            background: linear-gradient(to right,rgb(114, 5, 5),rgb(201, 83, 5));
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            padding: 2rem;
            gap: 1.5rem;
            flex-wrap: nowrap; 
            overflow-x: auto;  
        }

        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            flex: 0 0 300px; 
            text-align: center;
        }

        .card h3 {
            margin-bottom: 1rem;
            color:rgb(179, 11, 11);
        }

        .card p {
            margin: 0.5rem 0;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>🌤️ Weather Report</h1>
        <p>Live temperature, description, and humidity</p>
    </header>

    <div class="container">
        @foreach ($weatherData as $data)
            <div class="card">
                <h3>{{ $data['city'] }}</h3>
                @if (isset($data['error']))
                    <p style="color: red;">{{ $data['error'] }}</p>
                @else
                    <p><strong>🌡️ Temp:</strong> {{ $data['temperature'] }}°C</p>
                    <p><strong>☁️ Description:</strong> {{ ucfirst($data['description']) }}</p>
                    <p><strong>💧 Humidity:</strong> {{ $data['humidity'] }}%</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html
