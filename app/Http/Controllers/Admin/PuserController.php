<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\model\Admin\User;
class PuserController extends Controller
{
    public  function  create(){

        return view('admin/puser/create');
    }

    public  function  save(Request $request){
        $validator = Validator::make(Request()->all(),[
            'user_name'=>'required|unique:p_user',
            'password'=>'required',
            'email'=>'required|unique:p_user',
            'tel'=>'required|unique:p_user',
        ],[
            'user_name.required'=>'用户名必填',
            'user_name.unique'=>'用户名存在',
            'password.required'=>'密码必填',
            'email.required'=>'邮箱必填',
            'email.unique'=>'邮箱存在',

        ]);
        if ($validator->fails()) {
            return redirect('puser/create')
                ->withErrors($validator)
                ->withInput();
        }


        $data=$request->except('_token');
//        dd($data);
        if($data['password']!=$data['password']){
            return redirect('puser/create')->with('msg','两次密码不一样');
        }
        $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
        $data['reg_time']=time();
//        dd($data);
        $res=User::insert($data);

        if($res){
            return redirect('puser/login');
        }
    }
    public  function  index(){
        $res=User::get();
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