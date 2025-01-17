<?php

use Illuminate\Http\Request;


/*Route::group(['prefix' => 'mailgun','middleware' => ['mailgun.webhook'],],function () {

    Route::post('widgets', 'MailgunWidgetsController@store');

});*/


Route::group(['prefix' => 'mailgun'],function () {

    Route::post('inbound', 'Admin\Mail\MgInboundController@inbound');
    Route::post('store', 'Admin\Mail\MGInboundController@store');
    Route::get('apitest', 'Admin\Mail\MgInboundController@apitest');
    Route::get('nexmo', 'Admin\Mail\MgInboundController@nexmo');

});

Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::group(['prefix' => 'mail'],function () {
        Route::post('/{email}/inbound/', 'Api\MailController@inbound')->name('mail.inbound');
        Route::post('', 'Api\MailController@index')->name('get.mail');
        //Route::apiResource('mail', 'Api\MailController');
    });

    

});

//Route::apiResource('mails', 'Api\MailController')->middleware('auth:api');
//Route::group(['prefix' => 'mail'],function () {

  //Route::post('/{email}/inbound/', 'Api\MailController@inbound');
	//Route::apiResource('', 'Api\MailController');

//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
