<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public $timestamps = false;

    /*
     *
     */
    public static function getAll(){
        return static::orderBy('create_time','desc')->paginate(5);
    }

    /*
     *根据文章id找文章
     */
    public static function getArticleInfo($article_id){
        return static::find($article_id);
    }

    /*
     *根据标签id找文章
     */
    public static function getTagArticle($tag_id){
        return static::where('tag','=',$tag_id)->orderBy('create_time','desc')->paginate(2);
    }


    /*
     * 新增文章
     */
    public static function insertArticle($request){

        $arr = [];
        foreach ($request->type as $key=>$val){
            $arr[] =$key;
        }
        $data['tag'] = implode(',',$arr);
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['text'] = $request->text;

        return static::insert($data);
    }
}
