<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Models\Products;
use Carbon\Carbon;

class WeatherAppController extends Controller
{
function WeatherFunction(Request $request)
{
        $City = strtolower($request->query('city'));

        if (!$City) {
            return response()->json(['error' => 'City is required'], 400);
        }

        $cacheKey = "weather_forecast_{$City}";
        $ForecastData = Cache::remember($cacheKey, 300, function () use ($City) {
            $response = Http::get("https://api.meteo.lt/v1/places/" . $City . "/forecasts/long-term");
            if ($response->failed()) {
                abort(502, 'Input name of the city.');
            }
            return $response->json();
        });

        $Forecasts = collect($ForecastData['forecastTimestamps']);
        $today = Carbon::today();

        $Group = $Forecasts->groupBy(function ($item) {
            return substr($item['forecastTimeUtc'], 0, 10);
        });

        $results = collect();

        foreach ($Group as $date => $items) {
            if ($results->count() >= 3) break;

            $parsedDate = Carbon::parse($date);
            if ($parsedDate->lt($today)) continue;

            $condition = $items->first()['conditionCode'];


            $products = Products::where('condition_code', $condition)
                ->inRandomOrder()
                ->limit(2)
                ->pluck('name');

            $results->push([
                'date' => $date,
                'condition' => $condition,
                'products' => $products,
            ]);
        }

        return response()->json([
            'source' => 'Data provided by LHMT (https://api.meteo.lt)',
            'city' => ucfirst($City),
            'forecasts' => $results
        ]);
    }
}
