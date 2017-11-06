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
        return static::orderBy('create_time','desc')->paginate(2);
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


}
