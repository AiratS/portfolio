<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\HomeDataCollector;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function index(HomeDataCollector $dataCollector): JsonResponse
    {
        return response()->json($dataCollector->collect());
    }
}
