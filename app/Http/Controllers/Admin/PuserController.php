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
//        dd($data);
        $data['reg_time']=time();
        $res=DB::table('puser')->insert($data);
        if($res){
            return redirect('login');
        }
    }
    public  function  index(){
        $res=DB::table('puser')->get();
        return view('admin/puser/index',['res'=>$res]);
    }
    //登录页面
    function login(){
        return view('admin/puser/login');
}
    function logindo(Request $request){
        $user=$request->except('_token');
//         dd($user);
        //根据查询表中数据
        $username=DB::table('puser')->where('user_name',$user['user_name'])->first();
        // dd($username);
        //验证账号是否与表中一制
        if(!$username){
            return redirect('/login')->with('msg','没有此用户');
        }
        //判断密码是否正确
        if($username->password!=$user['password']){
            return redirect('/login')->with('msg','密码错误');
        }
        //存入登录时间

        DB::table('puser')->where('uid',$username->uid)->update($user);
        //跳转到展示页面
        return redirect('index');
    }

}