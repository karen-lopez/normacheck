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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addList', 'CheckListsController@addList');


Route::middleware(['auth'])->group(function() {

	//user
  Route::get('user/profile','UserController@show')->name('profile');
  Route::get('user/checks{id}','CheckListsController@checklists')->name('checklist');

});
