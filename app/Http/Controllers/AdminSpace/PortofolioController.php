<?php

namespace App\Http\Controllers\AdminSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Portofolio as PortofolioModel;

class PortofolioController extends Controller
{
    public function view_create()
    {
    	return view("panel.portofolio.create");
    }

    public function view_update($portofolio_id)
    {
        $portofolio1 = PortofolioModel::find($portofolio_id);
    	return view("panel.portofolio.update",['port'=>$portofolio1]);
    }

    public function view_list()
    {
 
        $Portofolio = PortofolioModel::paginate(3);
    	return view("panel.portofolio.list",['porto'=> $Portofolio]);
    }

    public function post_create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'picture' => 'image'
        ]);

        $file = $request->picture;
    
        if ($validator->fails()) {
            print_r($validator->messages());
        }

        $format = $file->getClientOriginalExtension();
        //generate file name
        $fileName = time() . rand(1, 999999) . '.' . $format;

        // generate route name + $filename
        $path = 'storage/' . $fileName;
        //store file
        $file->storeAs('public/image/', $fileName);


        $title = $request->title;
        $picture = $fileName;
        $content = $request->content;
        $category = $request->category;

        $p = new PortofolioModel();
        $p->title = $title;
        $p->picture = $picture;
        $p->content = $content;
        $p->category = $category;
        $p->save();
        // return redirect()->route('portofolio-list');
    }

    public function post_delete(Request $request){
        $data = array();
        
        try {
            $porto = $request->portofolio_id;

            if(strlen($porto) == 0){
                $porto = 0;
            }
            $data['portofolio_id'] = $porto;
        } catch(\Exception $e){
            $porto = 0;
        }

        $rules = [
            'portofolio_id' => 'exists:portofolio, portofolio_id'
        ];
        
        $validator = Validator::make($data, $rules);
        if(!$validator->passes()){
            $data['error'] = $validator->messages();
            return $data;
        }
        try{
            $record = PortofolioModel::find($porto);
            $record->delete();
        } catch(Exception $exception){
            $data['error'] = array('data ini tidak bisa dihapus');
            return $data;
        }
    }

    public function post_update(Request $request){
        try {
            // Find the article by ID
            $portofolio = PortofolioModel::findOrFail($request->portofolio_id);


            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'image' => 'image'
            ]);

            $file = $request->picture;
    
            if ($validator->fails()) {
                print_r($validator->messages());
            }
    
            $format = $file->getClientOriginalExtension();
            //generate file name
            $fileName = time() . rand(1, 999999) . '.' . $format;
    
            // generate route name + $filename
            $path = 'storage/' . $fileName;
            //store file
            $file->storeAs('public/image/', $fileName);
    
            $title = $request->title;
            $picture = $filename;
            $content = $request->content;
            $category = $request->category;
    
            $p = new PortofolioModel();
            $p->title = $title;
            $p->picture = $picture;
            $p->content = $content;
            $p->category = $category;
            $p->save();
    
            return response()->json(['message' => 'Portofolio updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
