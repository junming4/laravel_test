<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    //return view('welcome');



//   $str = "admin.news.destroy";
//
//    return collect(explode('.',$str))->last();

    //dd(Mail::to('xiaojunming4@gmail.com')->send(new \App\Mail\WellComeLaravel()));

});*/

Route::group(['namespace' => 'Blog'], function ($route) {

    $route->get('/','indexController@index');

    $route->get('show/{id}',['as'=>'blog.show','uses' => 'indexController@show']);

});

