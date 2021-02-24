<?php

namespace App\Http\Controllers\API;

use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Tag::all()
            ], 200);
    }
}
