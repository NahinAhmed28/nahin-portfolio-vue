<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProfile;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('portfolio');
    }

    public function show(): JsonResponse
    {
        $profile = PortfolioProfile::query()->latest()->first();

        return response()->json($profile);
    }
}
