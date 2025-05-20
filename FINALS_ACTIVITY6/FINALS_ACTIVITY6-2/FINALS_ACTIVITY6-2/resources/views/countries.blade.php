<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Countries Info</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #eef2f3;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background: linear-gradient(to right,rgb(92, 4, 4),rgb(124, 6, 6));
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            padding: 2rem;
            flex-wrap: nowrap;
            overflow-x: auto;
        }
        .card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            flex: 0 0 300px;
            text-align: center;
        }
        .card h3 {
            color: #2980b9;
            margin-bottom: 1rem;
        }
        .card img {
            width: 100px;
            height: auto;
            margin-bottom: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card p {
            margin: 0.5rem 0;
            font-size: 1rem;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>🌍 Countries Information</h1>
        <p>Capital, Region, Population & Flag</p>
    </header>

    <div class="container">
        @foreach ($countriesData as $country)
            <div class="card">
                <h3>{{ $country['name'] }}</h3>

                @if (isset($country['error']))
                    <p class="error">{{ $country['error'] }}</p>
                @else
                    @if ($country['flag'])
                        <img src="{{ $country['flag'] }}" alt="Flag of {{ $country['name'] }}">
                    @endif
                    <p><strong>Capital:</strong> {{ $country['capital'] }}</p>
                    <p><strong>Region:</strong> {{ $country['region'] }}</p>
                    <p><strong>Population:</strong> {{ number_format($country['population']) }}</p>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
