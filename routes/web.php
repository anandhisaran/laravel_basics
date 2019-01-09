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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
   // return redirect('home');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 Route::post('/blog/store','UserRegistration@store');
  Route::get('home','UserRegistration@showuser');
  Route::get('profile','UserRegistration@showprofile');
  Route::get('edit/{id}','UserRegistration@edituser');
  Route::get('updateuser','UserRegistration@updateuser');
// Route::post('/home',array('uses'=>'UserRegistration@postRegister'));
// Route::get('insert','UserRegistration@postRegister');
// Route::post('create','UserRegistration@insert');
 Route::get('/logout', function()
{
	Auth::logout();
	return redirect('/');
});
