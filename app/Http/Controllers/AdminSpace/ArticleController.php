<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function view_create()
    {
    	return view("panel.article.create");
    }

    public function view_update()
    {
    	return view("panel.article.update");
    }

    public function view_list()
    {
    	return view("panel.article.list");
        // $article = ArticleModel::all();
        // return view('article',['article' => $article]);
    }

    public function post_delete(Request $request){
    	echo "Arhan's work";
    }

    public function post_create(Request $request){
        $title = $request->title;
        $image = $request->image;
        $isi = $request->isi;

        $k = new ArticleModel();
        $k->title = $title;
        $k->image = $image;
        $k->isi = $isi;
        $k->save();
        return redirect()->route('create-article-get');
    }

    public function post_update(Request $request){
    	echo "Arhan's work";
    }
}
