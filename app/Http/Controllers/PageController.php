<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
       /**
     * Show index page
     *  @return view
     */
    public function index()
    {
        return view('welcome');
    }
      /**
     * Show post page
     *  @return view
     */
    public function blog(Post $post)
    {
        $posts = $post->all();
        return view('blog', compact("posts"));
    }
}
