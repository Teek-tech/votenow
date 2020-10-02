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
    Route::get('/user/{user}/edit', 'AdminController@editUser')->name('admin.editUsers');
    Route::patch('/user/{user}/update', 'AdminController@updateUser')->name('admin.updateUsers');

    //Verify Admin
    Route::patch('/user/{user}/updateAdmin', 'AdminController@updateAdmin')->name('admin.updateAdmin');

    //view and Edit Campaigns
    Route::get('/campaign','AdminController@viewCampaigns')->name('admin.viewCampaigns');
    Route::get('/campaign/{campaignId}/edit','AdminController@editCampaigns')->name('admin.editCampaigns');
    Route::patch('/campaign/{campaignId}/update','AdminController@updateCampaigns')->name('admin.updateCampaigns');
    Route::delete('/campaign/{CampaignId}/delete', 'AdminController@destroyCampaign')->name('admin.deleteCampaign');

    //view Contests
    Route::get('/contest','AdminController@viewContests')->name('admin.viewContests');
    Route::get('/contest/{contestId}/edit', 'AdminController@editContest')->name('admin.editContest');
    Route::patch('/contest/{contestId}/update', 'AdminController@updateContest')->name('admin.updateContest');
    Route::delete('/contest/{contestId}/delete', 'AdminController@destroyContest')->name('admin.deleteContest');

    //View Contestants
    Route::get('/contestant','AdminController@viewContestants')->name('admin.viewContestants');
    Route::get('/contestant/{contestantId}/edit', 'AdminController@editContestant')->name('admin.editContestant');
    Route::patch('/contestant/{contestantId}/update', 'AdminController@updateContestant')->name('admin.updateContestant');
    Route::delete('/contestant/{contestantId}/delete', 'AdminController@destroyContestant')->name('admin.deleteContestant');

    

    //view subscriptions
    Route::get('/subscription','AdminController@viewSubscriptions')->name('admin.viewSubcriptions');
    Route::get('/subscription/{subscriptionId}/edit','AdminController@editSubscription')->name('admin.editSubscription');
    Route::patch('/subscription/{subscriptionId}/update','AdminController@updateSubscription')->name('admin.updateSubscription');
    Route::delete('/subscription/{subscriptionId}/delete', 'AdminController@destroySubscription')->name('admin.deleteSubscription');

    //View Transactions
    Route::get('/transaction','AdminController@viewTransactions')->name('admin.viewTransactions');
    Route::get('/transaction/{transactionId}/edit','AdminController@editTransaction')->name('admin.editTransaction');
    Route::patch('/transaction/{transactionId}/update','AdminController@updateTransaction')->name('admin.updateTransaction');
    Route::delete('/transaction/{transactionId}/delete', 'AdminController@destroyTransaction')->name('admin.deleteTransaction');
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