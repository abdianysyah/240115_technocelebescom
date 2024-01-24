<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article as ArticleModel;

class ArticleController extends Controller
{
    public function view_create()
    {
        //  return view("arhantryout.article_create");
    	return view("panel.article.create");
    }

    public function view_update()
    {
        // return view("arhantryout.article_update");
    	return view("panel.article.update");
    }

    public function view_list()
    {
        // $article = ArticleModel::all();
        // return view('arhantryout.article_list',['article' => $article]);
    	// return view("panel.article.list");
        $article = ArticleModel::all();
        
        return view('panel.article.create',['article' => $article]);
    }

    public function post_list(){
        $article = ArticleModel::paginate(10);
        echo json_encode($article);
    }

    public function post_delete(Request $request)
    {
        $data = array();
        
        try {
            $article_id = $request->article_id;

            if(strlen($article_id) == 0){
                $article_id = 0;
            }
            $data['article_id'] = $article_id;
        } catch(\Exception $e){
            $article_id = 0;
        }

        $rules = [
            'article_id' => 'exists:article, article_id'
        ];
        
        $validator = Validator::make($data, $rules);
        if(!$validator->passes()){
            $data['error'] = $validator->messages();
            return $data;
        }
        try{
            $record = ArticleModel::find($article_id);
            $record->delete();
        } catch(Exception $exception){
            $data['error'] = array('data ini tidak bisa dihapus');
            return $data;
        }
    }

    public function post_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'requird'
        ]);

        $v = $file->getClientOriginalExtension();
        //generate file name
        $fileName = time() . rand(1, 999999) . '.' . $format;


        $title = $request->title;
        $image = $request->image;
        $isi = $request->isi;

        $k = new ArticleModel();
        $k->title = $title;
        $k->image = $image;
        $k->isi = $isi;
        $k->id = 1;
        $k->save();
        return redirect()->route('article-list');
    }

    public function post_update($article_id, $newTitle, $newImage, $newIsi)
    {
        try {
            // Find the article by ID
            $article = Article::findOrFail($article_id);
    
            // Update the fields
            $article->title = $newTitle;
            $article->image = $newImage;
            $article->isi = $newIsi;
    
            // Save the changes
            $article->save();
    
            return response()->json(['message' => 'Article updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
