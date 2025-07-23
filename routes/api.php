<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherAppController;

Route::get('/products/recommended/', [WeatherAppController::class, 'WeatherFunction']);

