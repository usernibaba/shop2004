<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public  function  create(){
        return view('admin/admin/create');
    }


}