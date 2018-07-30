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

//Route for Frontend Mainpage

Route::group(['prefix' => LaravelLocalization::setLocale()], function() 
{
	//send message
	//
	Route::post('/contactmessage', 'ContactMessageController@store')->name('contactmessage.store');

	Route::get('/', 'MainPageController@index')->name('mainpage.index');

});

Route::group(['prefix' => 'shop'], function() {


	//shop index
	Route::get('/', 'ShopMainPageController@index')->name('shop.mainpage.index');
});



Route::group(['prefix' => 'managekioskorea'], function () {
    Voyager::routes();
});
