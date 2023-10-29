<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article= new Article;

        $article->title =$request->title;
        $article->body =$request->body;

        $article -> save();

        return redirect(route("articles.index"));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

}
