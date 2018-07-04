<?php

Route::resource('posts', 'Posts\PostController');

Route::post('comment', 'Posts\CommentController@store')->name('comments.store');

Route::get('/', function () {
    return view('welcome');
});
