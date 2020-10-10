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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\User;

Route::get('/', 'mylistController@index');

Route::resource('mylist','mylistController');
Auth::routes();


Route::get('/subject1', function () {
    return view('subject1'); });

Route::get('/about', function () {
        return view('about'); });

Route::get('/bootstrap', function () {
            return view('firstbootstrap');
        });

// Route::post('/post','PostsController@store');
// Route::post('/post','PostsController@index');
//Route::resource('post','postsController');
Route::post('/welcome','PostsController@postActive');   
Route::get('/home', 'PostsController@postIndex');
Route::get('/approve/{id}','PostsController@postApprove');
Route::get('/reject/{id}','PostsController@postReject');
Route::get('/show/{id}','PostsController@postShow');
Route::post('/create','PostsController@store');
//  Route::resource('home','homeController');

 Route::get('/create', function () {
    return view('create');
});


// Route::resource('create','createController');


//  Route::get('/fined/{id}/user',function($id){
//      $topi = User::find($id)->posts;
//      return $topi;
//  });

 