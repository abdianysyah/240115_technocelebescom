<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article as ArticleModel;

class ArticleController extends Controller
{
    public function artikel()
    {
        $article = ArticleModel::all();
        return view('article');
    }
}
