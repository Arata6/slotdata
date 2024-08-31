<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parlors;
use App\Models\Area;

class AreaController extends Controller
{
    public function top(Area $area)
    {
        return view('areas.top')->with(['areas' => $area->getPaginateByLimit()]);
    }
    
    public function index(Area $area)
    {
        return view('areas.index')->with(['parlors' => $area->getByArea()]);
       //blade内で使う変数'parlors'と設定。'parlors'の中身にgetを使い、インスタンス化した$parlorを代入。
    }
    
    public function show(Area $area)
    {
        return view('areas.show')->with(['area' => $area]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create(Area $area)
    {
        return view('areas.create')->with(['areas' => $area->get()]);
    }
    
}
