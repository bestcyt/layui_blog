<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
//        if (session('user')){  中间件做的事情
//
//            return view('admin/index');
//        }
        return view('admin/index');
    }

    public function login(Request $request){
        if ($request->method() == 'POST'){

            return redirect()->route('admin_index');
        }
        return view('admin/login');
        if ($request){

            dd($request);
        }

        return redirect('admin/index');
    }


}
