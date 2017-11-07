<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    public $timestamps = false;

    public static function insertTimeEvent($request){

        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['content'] = $request->content;
        $data['create_time'] = time();

        return static::insert($data);

    }
}
