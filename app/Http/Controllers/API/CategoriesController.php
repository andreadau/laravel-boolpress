<?php

namespace App\Http\Controllers\API;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Categories::all()
            ], 200);
    }
}
