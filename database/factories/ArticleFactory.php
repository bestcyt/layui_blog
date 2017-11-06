<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/27
 * Time: 11:11
 */

$factory->define(App\Model\article::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->name,
        'uid' => 1,
        'tag' => random_int(1,9),
        'read' => random_int(1,9),
        'up' => random_int(1,9),
        'text' => str_random(10),
        'desc' => str_random(10),
        'create_time' => random_int(10,1000),
        'update_time' => random_int(10,1000),
    ];
});