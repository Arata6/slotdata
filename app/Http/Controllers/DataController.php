<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\Models\Data;
use App\Models\Parlor;

class DataController extends Controller
{
    public function index(Data $data, Parlor $parlor )
    {
        return view('datas.index')->with(['datas' => $data->getPaginateByLimit()]);  
       //blade内で使う変数'datas'と設定。'datas'の中身にgetを使い、インスタンス化した$dataを代入。
    }
    
    public function show(Data $data)
    {
        return view('datas.show')->with(['data' => $data]);
     //'data'はbladeファイルで使う変数。中身は$dataはid=1のdataインスタンス。
    }
    
    public function store(Request $request, Data $data)
    {
        $input = $request['data'];
        $data->fill($input)->save();
        return redirect('datas/' . $data->id);
    }
    
    public function edit(Data $data)
    {
        return view('datas.edit')->with(['data' => $data]);
    }
    
    public function update(DataRequest $request, Data $data)
    {
        $input_data = $request['data'];
        $data->fill($input_data)->save();
    
        return redirect('/datas/' . $data->id);
    }
    
    public function delete(Data $data)
    {
        $data->delete();
        return redirect('/');
    }
    
    public function create(Parlor $parlor)
    {
        return view('datas.create')->with(['parlors' => $parlor->get()]);
    }
}
