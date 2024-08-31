<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParlorRequest;
use App\Models\Parlor;
use App\Models\Area;

class ParlorController extends Controller
{
    public function index(Parlor $parlor)
    {
        return view('parlors.index')->with(['parlors' => $parlor->getPaginateByLimit()]);  
       //blade内で使う変数'parlors'と設定。'parlors'の中身にgetを使い、インスタンス化した$parlorを代入。
    }
    
    public function show(Parlor $parlor)
    {
        $datas=$parlor->datas()->get();
        return view('parlors.show')->with(['parlor' => $parlor, 'datas'=>$datas]);//
     //'parlor'はbladeファイルで使う変数。中身は$parlorはid=1のparlorインスタンス。
    }
    
    public function store(Request $request, Parlor $parlor)
    {
        $input = $request['parlor'];
        $parlor->fill($input)->save();
        return redirect('parlors/' . $parlor->id);
    }
    
    public function edit(Parlor $parlor)
    {
        return view('parlors.edit')->with(['parlor' => $parlor]);
    }
    
    public function update(ParlorRequest $request, Parlor $parlor)
    {
        $input_parlor = $request['parlor'];
        $parlor->fill($input_parlor)->save();
    
        return redirect('/parlors/' . $parlor->id);
    }
    
    public function delete(Parlor $parlor)
    {
        $parlor->delete();
        return redirect('/parlors');
    }
    
    public function create(Area $area)
    {
        return view('parlors.create')->with(['areas' => $area->get()]);
    }
    
   
}
