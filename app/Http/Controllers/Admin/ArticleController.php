<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('admin/article/index')->withArticles(\App\Article::orderBy('id', 'desc')->get());
    }

    public function create()
    {
        return view('admin/article/create');
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = $req->title;
        $article->body = $req->body;
        $article->user_id = \Auth::id();

        if ($article->save()) {
            return redirect('/admin/article');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败');
        }

    }

    public function edit(Article $article)
    {
        return view('admin/article/edit', compact('article'));
    }

    public function update(Request $req, Article $article)
    {
        $this->validate($req, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $article->title = $req->title;
        $article->body = $req->body;

        if ($article->save()) {
            return redirect('/admin/article');
        } else {
            return redirect()->back()->withErrors('保存失败');
        }

    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/admin/article');
    }
}
