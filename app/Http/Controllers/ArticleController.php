<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\Articles;

class ArticleController extends Controller{
    public function index()
    {
        $articles = Articles::All();
        return view ('articles.index')->with('articles',$articles);
    }
}
