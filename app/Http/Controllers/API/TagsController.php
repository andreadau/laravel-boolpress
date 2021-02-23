<?php

namespace App\Http\Controllers\API;

use App\Tags;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Tags::all()
            ], 200);
    }
}
