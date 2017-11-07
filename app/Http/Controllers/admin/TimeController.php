<?php

namespace App\Http\Controllers\admin;

use App\Model\time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    public $is_pjax;
    public $view_path_pre;

    public function __construct()
    {
        $this->is_pjax = array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
        if ($this->is_pjax){
            $this->view_path_pre = 'admin.pjax.time.';
        }else{
            $this->view_path_pre = 'admin.time.';
        }
    }

    /*
     * 添加时间线
     */
    public function add(){


        return view($this->view_path_pre.'add');
    }

    /*
     * 时间线提交
     */
    public function post(Request $request){

        $re = time::insertTimeEvent($request);

        if ($re){
            return redirect('admin/time/add');
        }else{

        }

    }
}
