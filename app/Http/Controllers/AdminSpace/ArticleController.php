<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Article as ArticleModel;

class ArticleController extends Controller
{
    public function view_create()
    {
        //  return view("arhantryout.article_create");
    	return view("panel.article.create");
    }

    public function view_update($article_id)
    {
        $article = ArticleModel::find($article_id);
        // return view("arhantryout.article_update",['article' => $article]);
    	return view("panel.article.update",['article' => $article]);
    }

    public function view_list()
    {
        // $article = ArticleModel::all();
        // return view('arhantryout.article_list',['article' => $article]);
    	// return view("panel.article.list");
        return view('panel.article.list');
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
            'image' => 'image'
        ]);

        $I = $request->image;
    
        if ($validator->fails()) {
            print_r($validator->messages());
        }

        $F = $I->getClientOriginalExtension();
        //generate file name
        $file = time() . rand(1, 999999) . '.' . $F;

        // generate route name + $filename
        $path = 'storage/' . $file;
        //store file
        $I->storeAs('public/image/', $file);


        $title = $request->title;
        $image = $file;
        $isi = $request->editor1;

        $k = new ArticleModel();
        $k->title = $title;
        $k->image = $image;
        $k->isi = $isi;
        $k->id = 1;
        $k->save();
        return redirect()->route('article-list');
    }

    public function post_update(Request $request)
    {
        try {

            $k = ArticleModel::findOrFail($request->article_id);
            
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'image' => 'image'
            ]);
    
            $I = $request->image;
        
            if ($validator->fails()) {
                print_r($validator->messages());
            }
    
            $F = $I->getClientOriginalExtension();
            //generate file name
            $file = time() . rand(1, 999999) . '.' . $F;
    
            // generate route name + $filename
            $path = 'storage/' . $file;
            //store file
            $I->storeAs('public/image/', $file);


            // Find the article by ID
            
    
            $title = $request->title;
            $image = $file;
            $isi = $request->editor1;
    
            $k->title = $title;
            $k->image = $image;
            $k->isi = $isi;
            $k->id = 1;
            $k->save();
            return redirect()->route('article-list');
    
            return response()->json(['message' => 'Article updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
