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

Route::get('/home', function () {
return view('welcome');
});

Route::get('about',[
'as' => 'about',
'uses' => 'PagesController@getAbout'

]);
Route::get('contact-us',[
'as' => 'contact_us',
'uses' => 'PagesController@getContact-us'

]);

Route::get('/jorodhani', 'PagesController@Jorodhani')->name('jorodhani');


Route::get('/patience-and-vistors', 'PagesController@Patience_and_vistors')->name('patience-and-vistors');


Route::get('/tabheras', 'PagesController@Tabheras')->name('tabheras');

Route::get('/zcc-community', 'PagesController@Zcc_community')->name('zcc-community');

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');
