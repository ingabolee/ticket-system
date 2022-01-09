<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::get('', 'App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::get('home', 'App\Http\Controllers\DashboardController@index')->middleware('auth');
Route::get('/tables', 'App\Http\Controllers\TablesController@index')->middleware('auth');
Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->middleware('auth');

Route::get('/booking', 'App\Http\Controllers\BookingController@index')->middleware('auth');
Route::get('/booking/create', 'App\Http\Controllers\BookingController@create');
Route::post('/booking', 'App\Http\Controllers\BookingController@store');
Route::get('/booking/{id}', 'App\Http\Controllers\BookingController@show')->middleware('auth');
Route::delete('booking/{id}','App\Http\Controllers\BookingController@destroy')->middleware('auth');


Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->middleware('auth');


Route::get('/event', 'App\Http\Controllers\EventController@index')->middleware('auth');
Route::get('/event/create', 'App\Http\Controllers\EventController@create')->middleware('auth');
Route::post('/event', 'App\Http\Controllers\EventController@store')->middleware('auth');
Route::get('/event/{id}', 'App\Http\Controllers\EventController@show')->middleware('auth');
Route::delete('event/{id}','App\Http\Controllers\EventController@destroy')->middleware('auth');

Route::get('/eventtype', 'App\Http\Controllers\EventTypeController@index')->middleware('auth');
Route::get('/eventtype/create', 'App\Http\Controllers\EventTypeController@create')->middleware('auth');
Route::post('/eventtype', 'App\Http\Controllers\EventTypeController@store')->middleware('auth');
Route::get('/eventtype/{id}', 'App\Http\Controllers\EventTypeController@show')->middleware('auth');
Route::delete('eventtype/{id}','App\Http\Controllers\EventTypeController@destroy')->middleware('auth');

Route::get('/payment', 'App\Http\Controllers\PaymentController@index')->middleware('auth');
Route::get('/payment/create', 'App\Http\Controllers\PaymentController@create');
Route::post('/payment', 'App\Http\Controllers\PaymentController@store');
Route::get('/payment/{id}', 'App\Http\Controllers\PaymentController@show')->middleware('auth');
Route::delete('payment/{id}','App\Http\Controllers\PaymentController@destroy')->middleware('auth');

Route::get('/ticket', 'App\Http\Controllers\TicketController@index')->middleware('auth');
Route::get('/ticket/create', 'App\Http\Controllers\TicketController@create');
Route::post('/ticket', 'App\Http\Controllers\TicketController@store');
Route::get('/ticket/{id}', 'App\Http\Controllers\TicketController@show')->middleware('auth');
Route::delete('ticket/{id}','App\Http\Controllers\TicketController@destroy')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
