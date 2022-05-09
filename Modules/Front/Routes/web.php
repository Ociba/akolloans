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


Route::group(['prefix'=>'front', 'middleware'=>['auth']],function(){ 
    Route::get('/', 'FrontController@index');
    Route::get('/get-slider','SliderController@index')->name('Slider');
    Route::get('/edit-slider/{slider_id}','SliderController@editSlider')->name('Edit Slider');
    Route::get('/update-slider/{slider_id}','SliderController@updateSlider');
    Route::post('/create-slider','SliderController@createSlider');
    Route::get('/delete-slider/{slider_id}','SliderController@deleteSlider');

    Route::get('/get-services','ServicesController@index')->name('Services');
    Route::get('/edit-service/{service_id}','ServicesController@editService')->name('Edit Services');
    Route::get('/update-service/{service_id}','ServicesController@updateService');
    Route::post('/create-service','ServicesController@createService');
    Route::get('/delete-service/{service_id}','ServicesController@deleteService');

    Route::get('/get-messages','CountController@index')->name('Messages');
    Route::get('/edit-messages/{message_id}','CountController@editService')->name('Edit Services');
    Route::get('/update-messages/{message_id}','CountController@updateService');
    Route::get('/create-messages','CountController@createMessage');
    Route::get('/delete-messages/{message_id}','CountController@deleteMessage');

    Route::get('/get-happy-clients','ClientSayController@index')->name('Happy Clients');
    Route::get('/edit-client/{client_id}','ClientSayController@editInfo')->name('Edit Happy Client Info');
    Route::get('/update-client/{client_id}','ClientSayController@updateInfo');
    Route::post('/create-happy-client','ClientSayController@createClientSay');
    Route::get('/delete-happy-client/{client_id}','ClientSayController@deleteClient'); 

    Route::get('/get-news','NewsController@index')->name('News');
    Route::get('/edit-news/{news_id}','NewsController@editNews')->name('Edit News');
    Route::get('/update-news/{news_id}','NewsController@updateNews');
    Route::post('/create-news','NewsController@createNews');
    Route::get('/delete-news/{news_id}','NewsController@deleteNews');

    Route::get('/get-comments','CommentController@Comment')->name('Comments');
    Route::get('/replay-comment/{comment_id}','CommentController@replyComment')->name('Reply Comment');
    Route::get('/save-reply/{comment_id}','CommentController@reply');
    Route::get('/delete-comment/{comment_id}','CommentController@deleteComment');
});
