<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Plan::all());
    }
}
