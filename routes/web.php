<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/','PagesController@index');
 Route::get('/about','PagesController@about');
 Route::get('/services','PagesController@services');
 Route::resource('posts','PostsController');
 Route::resource('users','PostsController');
 //Route::get('/ckeditor', 'CkeditorController@index');

// Route::get('/', function() {
//     return 'Hello World '; 
// }); 

// Route::get('/test', function(){
//     return view('test');
// });

 //Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    if(Auth::check()){return Redirect::to('home');}
     return view('pages/index');
 });

 Route::get('profile','UserController@profile');