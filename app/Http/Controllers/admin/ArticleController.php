<?php

namespace App\Http\Controllers\admin;

use App\model\article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public $is_pjax;
    public $view_path_pre;

    public function __construct()
    {
        $this->is_pjax = array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
        if ($this->is_pjax){
            $this->view_path_pre = 'admin.pjax.';
        }else{
            $this->view_path_pre = 'admin.article.';
        }
    }

    /*
     * 文章列表
     */
    public function index(){

        $list = article::getAll();

        return view($this->view_path_pre.'index' , ['list'=>$list]);
    }

    /*
    * 增加文章
    */
    public function add(Request $request){
        if ($request->file()){
            foreach ($_FILES as $FILE){
                $filename ='article_'.time().$FILE['name'];
                copy($FILE['tmp_name'],public_path().'/up_images/'.$filename);
                $src = config('blog.web_path').'/up_images/'.$filename;
            }
            return json_encode(['code'=>0,'msg'=>'ok','data'=>['src'=>$src]]);
        }
        if ($request->method() == 'POST'){
            $re = article::insertArticle($request);
            if ($re){
                //成功 插入前校验 弹窗
            }else{
                //失败
            }
        }

        return view($this->view_path_pre.'add');
    }

}
