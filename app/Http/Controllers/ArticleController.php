<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::pluck('title'); // select title from articles;
        return view('articles', [ 'items' => $articles ]);
    }

    public function store()
    {

    }
}
