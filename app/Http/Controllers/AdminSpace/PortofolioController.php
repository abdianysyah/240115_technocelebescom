<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function view_create()
    {
    	return view("panel.portofolio.create");
    }

    public function view_update()
    {
    	return view("panel.portofolio.update");
    }

    public function view_list()
    {
    	return view("panel.portofolio.list");
        // $article = ArticleModel::all();
        // return view('article',['article' => $article]);
    }

    public function post_delete(Request $request){
    	echo "Arhan's work";
    }

    public function post_create(Request $request){
    	echo "Arhan's work";
    }

    public function post_update(Request $request){
    	echo "Arhan's work";
    }
}
