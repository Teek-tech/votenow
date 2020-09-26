<?php

use App\Http\Controllers\AdminController;
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

//Admin
Route::group(['prefix'=>'dashboard-admin', 'middleware'=>['isAdmin', 'auth']], function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    //view and Update User Information
    Route::get('/user', 'AdminController@viewUsers')->name('admin.users');
    //Route::get('/user/{user}/edit', 'AdminController@editUser')->name('admin.editUsers');
});

    Route::get('/dashbaord-admin/user/{id}/edit"', function ($id) {
        dd('testing');
    });
//User
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    
   //update profile
    Route::get('/profile', 'UserProfileController@index')->name('profile.index');
    Route::patch('/profile/{user}/update', 'UserProfileController@update')->name('profile.update');


      //Campaigns
    Route::get('/campaign', 'CampaignController@index')->name('campaign');
    Route::get('/campaign/create', 'CampaignController@create')->name('campaign.create');
    Route::post('/campaign', 'CampaignController@store')->name('campaign.store');
    Route::get('/campaign/{id}', 'CampaignController@show')->name('campaign.show');

    //Contests
    Route::get('/contest', 'ContestController@index')->name('contest.view');
    Route::get('/campaign/{campaign}/contest/create', 'ContestController@create')->name('contest.create');
    Route::post('/campaign/{campaign}/contest', 'ContestController@store')->name('contest.store');

    //Contestants
    Route::get('/contest/contestant','ContestantController@index')->name('contestants');
    Route::get('/contest/{contest}/contestant/create', 'ContestantController@create')->name('contestant.create');
    Route::post('/contest/{contest}/contestant', 'ContestantController@store')->name('contestant.store');


    // Route::get('/subscription/{id}', 'SubscriptionController@show_sub')->name('dashboard.subscription.show');
    //Transaction
    Route::get('/transaction', 'TransactionController@index')->name('dashboard.transaction');
    Route::delete('/transaction/{id}', 'TransactionController@destroy')->name('dashboard.transaction.delete');

    //Subscription
    Route::get('/subscription', 'SubscriptionController@create')->name('subscription.create');
    Route::post('/subscription', 'SubscriptionController@store')->name('subscription.store');
});

    //Admin
    Route::group(['prefix'=>'dashboard-admin', 'middleware'=>['isAdmin', 'auth']], function(){
        
    });

    //Feedback
    route::get('/feedback/create', 'FeedbackController@create')->name('feedback.create');
    route::post('/feedback', 'FeedbackController@store')->name('feedback.store');