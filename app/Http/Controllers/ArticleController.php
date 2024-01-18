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
    public function create_stock(Request $request){
        $nama_barang = $request->namabarang;
        $harga_jual = $request->hargajual;
        $harga_beli = $request->hargabeli;

        $k = new ArticleModel();
        $k->nama_barang = $nama_barang;
        $k->harga_beli = $harga_beli;
        $k->harga_jual = $harga_jual;
        $k->save();
        return redirect()->route('create-stock-get');
    }
}
