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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'UserProfileController@index')->name('dashboard.profile');
    Route::patch('profile/{user}/update', 'UserProfileController@update')->name('dashboard.profile-update');
      //Subscription
    Route::get('/subscription', 'SubscriptionController@user_sub')->name('dashboard.subscription');
    // Route::get('/subscription/{id}', 'SubscriptionController@show_sub')->name('dashboard.subscription.show');
    //Transaction
    Route::get('/transaction', 'TransactionController@index')->name('dashboard.transaction');
    Route::delete('/transaction/{id}', 'TransactionController@destroy')->name('dashboard.transaction.delete');
});
