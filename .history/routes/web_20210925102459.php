<?php



Route::get('/','BlogsController@index');

Route::get('/blogs/create','BlogsController@create');

Route::post('/blogs','BlogsController@store');


Route::get('/blogs/{blog}','BlogsController@show');

//Route::post('/posts/{post}/comments','CommentsController@store');
