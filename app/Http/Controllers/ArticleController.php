<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article as ArticleModel;

class ArticleController extends Controller
{
    public function artikel()
    {
        $article = ArticleModel::all();
        return view('article',['article' => $article]);
    }
    public function create_article(Request $request){
        $title = $request->title;
        $image = $request->image;
        $isi = $request->isi;

        $k = new ArticleModel();
        $k->title = $title;
        $k->image = $image;
        $k->isi = $isi;
        $k->save();
        return redirect()->route('create-stock-get');
    }
}
