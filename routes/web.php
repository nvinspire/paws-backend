<?php

// Route::get('/','PostsController@index');
//
// Route::get('/posts/create','PostsController@create');
//
// Route::post('/posts','PostsController@store');
//
// Route::get('posts/{post}','PostsController@show');
//
// Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/','CounterController@index');

Route::get('/counters','CounterController@view');

Route::put('counters/{id}','CounterController@update');
