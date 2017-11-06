<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/27
 * Time: 11:11
 */

$factory->define(App\Model\tag::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'tag' => str_random(5),
        'desc' => str_random(20),
        'create_time' => random_int(10,1000),
    ];
});