<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function show(Article $article)
    {
        $article = Article::with('comments')->find($article->id);
        //dd($article);exit;
        return view('article/show', compact('article'));
    }
}
