<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        
        $cities = [
            $request->query('city1', 'Manila'),
            $request->query('city2', 'Bangkok'),
            $request->query('city3', 'Seoul'),
        ];

        $apiKey = env('OPENWEATHER_API_KEY');
        $weatherData = [];

        foreach ($cities as $city) {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                'q' => $city,
                'appid' => $apiKey,
                'units' => 'metric'
            ]);

            if ($response->successful()) {
                $weatherData[] = [
                    'city' => $city,
                    'temperature' => $response['main']['temp'],
                    'description' => $response['weather'][0]['description'],
                    'humidity' => $response['main']['humidity']
                ];
            } else {
                $weatherData[] = [
                    'city' => $city,
                    'error' => 'Weather data not available'
                ];
            }
        }

        return view('weather', ['weatherData' => $weatherData]);
    }
}
