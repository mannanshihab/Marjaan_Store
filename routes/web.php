<?php

use Illuminate\Support\Facades\Route;

// website Route

Route::get('/', 'FrontEndController@home')
->name('welcome');

Route::get('/', 'FrontEndController@home')->name('website.home');

Route::get('/Category/{slug}', 'FrontEndController@category')->name('website.category');

Route::get('/details/{slug}', 'FrontEndController@details')->name('website.details');

Route::get('/about','FrontEndController@about')->name('website.about');

Route::get('/contact','FrontEndController@contact')->name('website.contact');




// admin Route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', function(){
            return view('admin.dashboard.index');
    });
	
	Route::resource('category','CategoryController');
	Route::resource('tag', 'TagController');
	Route::resource('post', 'PostController');
	
});
