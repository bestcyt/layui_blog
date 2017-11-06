<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','home\HomeController@index');


Route::get('info/{id}','home\ArticleController@info');

Route::get('tag/{id}','home\HomeController@index');

Route::get('admin/index','admin\IndexController@index')->name('admin_index');

Route::get('admin/login','admin\IndexController@login');
Route::post('admin/login','admin\IndexController@login');

Route::get('admin/article/list','admin\ArticleController@index');

Route::get('admin/article/add','admin\ArticleController@add');



//根据不同的url
Route::get('admin/pjax',function (){
   echo "<div style='background: green'>sadfaf</div>";
});