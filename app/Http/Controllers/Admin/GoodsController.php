<?php

namespace App\Http\Controllers\Admin;
use App\model\Goods as goodsModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function  index(){
        $res=goodsModel::limit(10)->get();
        return view('admin/goods/index',['res'=>$res]);
    }
    public function  create(){
        return view('admin/goods/create');
    }
    public  function  save(Request $request){
        $data=$request->except('_token');
        $res=goodsModel::insert($data);
        dd($res);
    }
}
