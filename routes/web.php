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
App::register('Darryldecode\Cart\CartServiceProvider');
Route::pattern('slug','.*');
Route::pattern('id', '([0-9]*)');

Route::get('thongbao', function () {
    return view('event.login.message');
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

Route::post('sendcontact',[
	'as'=>'sendcontact',
	'uses'=>'ContactController@sendcontact',
]);

Route::get('tintuc',[
	'uses' => 'NewController@index',
	'as' => 'event.news.tintuc'
]);

Route::get('vechungtoi',[
	'uses' => 'AboutusController@index',
	'as' => 'event.aboutus.aboutus'
]);


Route::get('checkout',[
	'uses' => 'checkout@getcheckout',
	'as' => 'event.checkout.checkout'
]);

Route::post('dathang',[
	'uses' => 'checkout@postcheckout',
	'as' => 'dathang'
]);

Route::get('addgiohang/{id}/{name}',['as'=>'addgiohang','uses'=>'IndexController@addgiohang']);
Route::get('viewgiohang',['as'=>'viewgiohang','uses'=>'IndexController@viewgiohang']);
Route::get('removeCart/{id}',['as'=>'removeCart','uses'=>'IndexController@removeCart']);
//Route::get('viewcart',['as'=>'viewcart','uses'=>'IndexController@viewcart']);
//Route::get('cart',['as'=>'cart','uses'=>'IndexController@cart']);
Route::get('sweet',['as'=>'sweet','uses'=>'IndexController@sweet']);

Route::get('singleevent/{id}/{name}',['as'=>'singleevent','uses'=>'EventController@singleevent']);
//hiển thị trên url là dòng ni đúng k daj

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
