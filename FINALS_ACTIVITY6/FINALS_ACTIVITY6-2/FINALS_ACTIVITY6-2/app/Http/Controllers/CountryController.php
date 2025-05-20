<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{
    public function getMultipleCountries(Request $request)
    {
        $countries = [
            $request->query('country1', 'France'),
            $request->query('country2', 'Japan'),
            $request->query('country3', 'Brazil'),
        ];

        $countriesData = [];

        foreach ($countries as $country) {
            $response = Http::get("https://restcountries.com/v3.1/name/{$country}");

            if ($response->successful() && count($response->json()) > 0) {
                $data = $response->json()[0];
                $countriesData[] = [
                    'name' => $data['name']['common'] ?? $country,
                    'capital' => $data['capital'][0] ?? 'N/A',
                    'region' => $data['region'] ?? 'N/A',
                    'population' => $data['population'] ?? 'N/A',
                    'flag' => $data['flags']['png'] ?? null,
                ];
            } else {
                $countriesData[] = [
                    'name' => $country,
                    'error' => 'Data not found',
                ];
            }
        }

        return view('countries', ['countriesData' => $countriesData]);

    }
}
