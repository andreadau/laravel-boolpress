<?php

namespace App\Http\Controllers;

use App\Article;
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
     * Show index page
     *  @return view
     */
    public function articles_api()
    {
        return view('spa.articles');
    }
      /**
     * Show article page
     *  @return view
     */
    public function blog(Article $article)
    {
        $articles = $article->all();
        return view('blog', compact("articles"));
    }
}
