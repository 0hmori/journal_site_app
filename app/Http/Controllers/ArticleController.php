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
    
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

}
