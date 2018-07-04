<?php

Route::resource('posts', 'Posts\PostController');

Route::post('comment', 'Posts\CommentController@store');

Route::get('/', function () {
    return view('welcome');
});
