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
Route::get('/stage',function(){
  $proposalform=DB::table('proposalforms')->get();
  return view('stage')->withproposalform($proposalform);
});
Route::resource('proposal','ProposalformController');
Auth::routes();
Route::get('admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
// route for activating the user
Route::get('/verify-user/5454', 'Auth\RegisterController@activateUser')->name('activate.user');
