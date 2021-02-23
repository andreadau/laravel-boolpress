<?php

namespace App\Http\Controllers\API;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Post::all()
            ], 200);
    }
}
