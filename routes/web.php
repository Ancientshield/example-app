<?php

use Illuminate\Support\Facades\Route;

use app\HttpControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats/{id}', function($id){
    return "我是第".$id."隻貓";
});

// Route::get("about", action:"WelcomeController@about");

Route::get('/about', [\App\Http\Controllers\WelcomeController::class, 'about']);

// Route::resource(name:'posts',controller: \App\Http\Controllers\PostsController:: class);

Route::resource(name:'posts',controller: \App\Http\Controllers\PostsController:: class)->only(['index','show']);

//Route::resource(name:'posts.comments', controller: \App\Http\Controllers\PostsController::class);
//巢狀route要用.，不能用/
//resource的name參數要用posts(復數)
//only的相反：->except
Route::resource(name:'posts.comments', controller: \App\Http\Controllers\PostsController::class)->shallow();
