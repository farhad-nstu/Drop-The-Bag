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

Auth::routes();

//Fronts Routes
Route::get('/home', 'HomeController@index');

Route::get('/front/home', 'HomeController@front')->name('front.home');


//Partners
Route::get('/partner-subscription', 'Front\PartnersController@index')->name('partner-subscription');
Route::post('/partner-subscription/insert', 'Front\PartnersController@store')->name('partner-subscription-insert');

Route::get('/partner-place/{id}', 'Front\PartnersController@partnerPlace')->name('partner-place');
Route::post('/partner-place/{id}', 'Front\PartnersController@partnerSubscription')->name('partner-subscription-complete');

//Orders
Route::get('/user-order-review/{id}', 'Front\OrdersController@review')->name('orderReview');
Route::post('/user-order-review/insert/{id}', 'Front\OrdersController@storeReview')->name('review-insert');


//Destination Routes
Route::get('/city-destination/{city}', 'LocationController@destination')->name('city.destination');
//Luggage storage
Route::get('/luggage-storage/{city}', 'LocationController@luggageStorage')->name('luggage-storage');
//Order
Route::post('/give-order/{loc_id}', 'OrderController@giveOrder')->name('give-order');
Route::get('/payment/{last_id}', 'OrderController@payment')->name('payment');
Route::post('/order-paypal/{id}', 'OrderController@paypal')->name('paypal');
Route::get('/user-order-list', 'OrderController@allOrder')->name('userOrderList');








//Admin Routes

Route::get('partner-signup-old', 'Admin\PartnersController@index')->name('partner-signup-old');
//Order 
Route::get('order', 'Admin\OrdersController@create')->name('order-create');
Route::post('order-insert', 'Admin\OrdersController@store')->name('order-insert');
