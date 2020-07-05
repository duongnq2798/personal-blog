<?php

use Illuminate\Support\Facades\Route;

// User Route

Route::group(['namespace' => 'User'], function () {
    // Home Routes
    Route::get('/', 'HomeController@index');
    // Post Routes
    Route::get('/post/{post}', 'PostController@index')->name('post');
    // About Routes
    Route::get('/about', 'AboutController@index');
    // Contact Routes
    Route::get('/contact', 'ContactController@index');
});




// Admin Route

Route::group(['namespace' => 'Admin'], function () {
    // Home Routes
    Route::get('/admin', 'HomeController@index');
    // Users Routes
    Route::resource('/admin/user', 'UserController');
    // Post Routes
    Route::resource('/admin/post', 'PostController');
    // Tag Routes
    Route::resource('/admin/tag', 'TagController');
    // Category Routes
    Route::resource('/admin/category', 'CategoryController');
});