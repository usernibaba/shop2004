<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class PuserController extends Controller
{
    public  function  create(){

        return view('admin/puser/create');
    }

    public  function  save(Request $request){
        $data=$request->except('_token');
        $data['reg_time']=time();
        $res=DB::table('puser')->insert($data);
        if($res){
            return redirect('PuserController/index');
        }
    }
    public  function  index(){
        $res=DB::table('puser')->get();
        return view('admin/puser/index',['res'=>$res]);
    }

}