<?php

namespace App\Http\Controllers\home;

use App\model\article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /*
     * @TODO 文章详情
     */
    public function info($id){
        if($id){

            $info = article::getArticleInfo($id);
            return view('home/article/info',['info'=>$info]);

        }else{
            //路由到首页
            return redirect('/');
        }
    }



}
