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

Route::get('/','IndexController@index')->name('Index');

Route::get('/Login','LoginController@index')->name('Login');

Route::get('/Pricing','PricingController@index')->name('Pricing');

Route::get('/Signup','SignUpController@index')->name('SignUp');

Route::get('/Templates','SubCategoryController@index')->name('SubCategory');

Route::get('/redirect', 'SignUpController@redirect');

Route::get('/callback', 'SignUpController@callback');

Route::get('DemoPage','DemoPageController@index')->name('DemoPage');

Route::get('/fbredirect', 'SignUpController@fbredirect');

Route::get('/fbcallback', 'SignUpController@fbcallback');

Route::group(['middleware'=>'auth'],function(){

Route::get('CompleteProfile', 'SignUpController@complete_profile')->name('CompleteProfile');

Route::get('Profile','LoginController@profile')->name('Profile');

Route::post('UserUpdate','SignUpController@user_update')->name('UserUpdate');

Route::post('Register','SignUpController@register')->name('Register');

Route::get('My-Downloads','DownloadController@index')->name('My-Downloads');

Route::get('/Cart','CartController@index')->name('Cart');

Route::post('UpdateProfile','LoginController@UpdateProfile')->name('UpdateProfile');

});





Route::get('/Admin/Login', 'Admin\LoginController@index')->name('Admin/Login');

Route::post('Admin/Login/Attempt', 'Admin\LoginController@attempt')->name('Admin/Login/Attempt');






Route::group(['middleware'=>'auth'],function(){

Route::get('Admin/Dashboard', 'Admin\DashboardController@index')->name('Admin/Dashboard');

Route::get('Admin/Users', 'Admin\UserController@index')->name('Admin/Users');

Route::get('Admin/Users/Add', 'Admin\UserController@create')->name('Admin/Users/Add');

Route::post('Admin/Users/Store', 'Admin\UserController@store')->name('Admin/Users/Store');

Route::post('Admin/Users/EditSession', 'Admin\UserController@editsession')->name('Admin/Users/EditSession');

Route::get('Admin/Users/Edit', 'Admin\UserController@edit')->name('Admin/Users/Edit');

Route::post('Admin/Users/Delete', 'Admin\UserController@delete')->name('Admin/Users/Delete');

Route::post('Admin/Users/Update', 'Admin\UserController@update')->name('Admin/Users/Update');





});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');