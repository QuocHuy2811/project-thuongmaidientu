<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminhome');
    }
    public function themSanPham(){
        return view('admin.themsanpham');
    }
    public function blankPage(){
        return view('admin.blankpageadmin');
    }
}
