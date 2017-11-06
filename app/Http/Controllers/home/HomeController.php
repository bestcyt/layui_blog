<?php

namespace App\Http\Controllers\home;

use App\model\article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //网站首页
    public function index($tag = 0){

//        session(['username'=>'cyt']);
        if ($tag){
            $list = article::getTagArticle($tag);
            $count = article::where('tag','=',$tag)->get();
        }else{
            $list = article::getAll();
            $count = article::get();
        }
//        dd($list,$count);
        return view('welcome',['list' => $list , 'count'=>count($count)]);
    }
    public function tii(Request $request){
        dd($request);
    }

}
