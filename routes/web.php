<?php
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');
Route::get('/posts','PostsController@index')->name('show_posts');
Route::get('/posts/create','PostsController@create')->name('CreatePosts');
Route::post('/posts','PostsController@store');
Route::get('/like','PostsController@like')->name('like');
Route::get('/deslike','PostsController@deslike')->name('deslike');
Route::get('/comment','CommentsController@CreateComment')->name('comment');
Route::resource('notifications', 'NotificationController');