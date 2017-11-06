<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\article',20)->create()->each(function ($u){
            $u->posts()->save(factory('App\Post')->make());
        });
    }
}
