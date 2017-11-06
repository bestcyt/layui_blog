<?php

use Illuminate\Database\Seeder;

class tagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Model\tag',10)->create()->each(function ($u){
            $u->posts()->save(factory('App\Post')->make());
        });
    }
}
