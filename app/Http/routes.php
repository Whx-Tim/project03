<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('test',function(){
    $prices = \App\Price::all();

    return ['result'=>'true','price'=>$prices];
});
Route::group(['middleware' => 'web' ], function () {

    Route::auth();

    Route::get('/','HomeController@index');
    Route::get('/home','HomeController@showHome');
    Route::get('/publish','PublishController@publishinformation');
    Route::get('newsdetail/{id}','HomeController@detailInformation');
    Route::get('pricing','HomeController@showPricing');
    Route::get('cooperatives','HomeController@showCooperatives');
    Route::get('publish','PublishController@publishInformation');
    Route::post('publish','PublishController@storeProduct');

    Route::get('test', function () {
    	return "Testing...";
    });
});
