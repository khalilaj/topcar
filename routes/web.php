<?php

Route::redirect('lara-admin','login');
Route::get('/','HomeController@index')->name('welcome');
Route::get('/car_for_sale_list','CarForSaleListController@index')->name('car_for_sale_list');
Route::get('/car_for_sale_detail','CarForSaleDetailController@index')->name('car_for_sale_detail');
Route::get('/spareparts_for_sale_list','SparePartsForSaleListController@index')->name('spareparts_for_sale_list');
Route::get('/car_review_list','CarReviewListController@index')->name('car_review_list');
Route::get('/spareparts_for_sale_detail','SparePartsForSaleDetailController@index')->name('spareparts_for_sale_detail');
Route::get('/car_review_detail','CarReviewDetailController@index')->name('car_review_detail');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController');
    Route::resource('category','CategoryController');
    Route::resource('car_category','CarCategoryController');
    Route::resource('car_for_sale','CarForSaleController');
    Route::resource('item','ItemController');
    
    Route::get('reservation','ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});