<?php

namespace App\Http\Controllers\admin;

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



        return view($this->view_path_pre.'index');
    }

    /*
    * 增加文章
    */
    public function add(){


        return view($this->view_path_pre.'add');
    }

}
