<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    \App\Post::create([
//        'title'=>'test title1',
//        'content'=>'test content1',
//        'is_feature'=>true
//    ]);
//
//    $post=new \App\Post();
//    $post->title='test title2';
//    $post->content='test content2';
//    $post->save();

//    $posts=\App\Post::all();
//    dd($posts);

//    $post=\App\Post::find(1);
//    dd($post);

    $posts=\App\Post::where('id', '<=', 3)->orderBy('id', 'DESC')->get();
    dd($posts);
//    return view('welcome');
});
