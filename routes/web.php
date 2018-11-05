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

Route::get('trangchu','IndexController@index');
Route::post('dangkisukien',[
	'as'=>'dangkisukien',
	'uses'=>'IndexController@dangkisukien',
]);
Route::get('trangchu','EventController@thanhpho');

Route::get('dangnhap', function () {
    return view('event.login.login');
});
Route::post('loadindex',[
	'uses' => 'IndexController@index',
	'as' => 'event.index.index1'
]);

Route::get('index',[
	'uses' => 'IndexController@index',
	'as' => 'event.index.index'
]);

Route::get('sukien',[
	'uses' => 'EventController@index',
	'as' => 'event.events.sukien'
]);

Route::get('contact',[
	'uses' => 'ContactController@index',
	'as' => 'event.contact.contact'
]);
Route::get('tintuc',[
	'uses' => 'NewController@index',
	'as' => 'event.news.tintuc'
]);

Route::get('vechungtoi',[
	'uses' => 'AboutusController@index',
	'as' => 'event.aboutus.aboutus'
]);


Route::get('singleevent/{id}/{name}',['as'=>'singleevent','uses'=>'EventController@singleevent']);

Route::get('city/{city}',['uses'=>'EventController@sukienthanhpho']);

Route::get('search',[
	'as'=>'search',
	'uses'=>'IndexController@SearchEvent',
]);


// LOGIN

Route::get('dangnhap',[
	'uses' => 'DangnhapController@index',
	'as' => 'event.login.login'
]);

Route::post('dangnhap','DangnhapController@postDangnhap');
