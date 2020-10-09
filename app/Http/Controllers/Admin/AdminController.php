<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public  function  create(){
        return view('admin/admin/create');
    }
    public  function  aaa(){
        Redis::set('name1','zhansan');
        $res=Redis::get('name1');
        dd($res);
    }


}