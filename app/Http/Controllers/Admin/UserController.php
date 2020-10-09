<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User as userModel;


class UserController extends Controller
{
    public  function  create(){
        return  view('admin/admin/create');
    }
    public  function store(Request $request){
        $data=$request->except('_token');
//        dd($data);
        $data['reg_time']=time();
//        dd($data);
        $res=userModel::insert($data);
//        dd($res);
        if($res){
            return redirect('admin/index');
        }
    }
    public  function  index(){
        $res=userModel::limit(10)->get();
//        dd($res);
        return view('admin/admin/index',['res'=>$res]);
    }
    public  function delete($user_id){
        $res=userModel::where('user_id',$user_id)->delete();
        if($res){
            return redirect('admin/index');
        }
    }
    public  function  edit($user_id){
        $res=userModel::where('user_id',$user_id)->first();
        return view('admin/admin/edit',['res'=>$res]);
    }
    public  function  update(Request $request,$user_id){
        $data=$request->except('_token');
        $data['reg_time']=time();
        $res=userModel::where('user_id',$user_id)->update($data);
//        dd($res);
        if($res){
            return redirect('admin/index');
        }
    }
}