<?php

namespace App\Http\Controllers;
use File;
use App\Models\User;
use App\Models\Campaign;
use App\Models\Contest;
use App\Models\Contestant;
use App\Models\Subscription;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            return view('admin.index');
        }
        
    public function viewUsers()
    {
        $users = User::all();
        return view('admin.user.index')->with('users', $users);
    }

    public function editUser($userId){
        
        $user = User::findorfail($userId);
        
        return view('admin.user.edit')->with('user', $user);
    }

    public function updateUser($userId){
        
        $user = User::findorfail($userId);
        $user->status = request('status');
        //$user->isAdmin = request('isAdmin');
         //dd($user);
        $user->save();
       
        return redirect('/dashboard-admin/user');

    }

    public function updateAdmin($userId){
        $user = User::findorfail($userId);
        $user->isAdmin = request('isAdmin');
        $user->save();
        return redirect('/dashboard-admin/user')->with('updateMessage', 'User Information Updated');
    }
   
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewCampaigns(){
        $campaigns =  Campaign::get();
        return view('admin.campaign.index')->with('campaigns',$campaigns);
    }

    public function editCampaigns($id){
        $campaign = Campaign::findorfail($id);
        return view ('admin.campaign.edit')->with('campaign', $campaign);
    }

    public function updateCampaigns($id){
        $campaign = Campaign::findorfail($id);
        $campaign->status = request('status');
        $campaign->save();

        return redirect('/dashboard-admin/campaign');

    }

    public function destroyCampaign($id){
        $campaign =  Campaign::findorfail($id);
        //dd($campaign); 
        if($campaign->status = '0'){
            $banner = 'campaign_image/'.$campaign->banner;
            if (File::exists($banner)) {
                File::delete($banner);
            }
            $campaign->delete();

            return redirect('/dashboard-admin/campaign');
        }else{
            return 'Campaign is still on, cannot delete';
        }

    }

    public function viewSubscriptions(){

        $subscriptions =  Subscription::all();
        return view ('admin.subscription.index')->with('subscriptions', $subscriptions);

    }

    public function editSubscription($id){
        $subscription = Subscription::findorfail($id);
        
        return view('admin.subscription.edit')->with('subscription',$subscription);
    }

    public function updateSubscription($id){
        $subscription = Subscription::findorfail($id);
        $subscription->status = request('status');
        $subscription->save();

        return redirect('/dashboard-admin/subscription');

    }

    public function destroySubscription($id){
        $subscription =  Subscription::findorfail($id);
        //dd($campaign); 
        
            $subscription->delete();

            return redirect('/dashboard-admin/subscription');
    }


    public function viewTransactions(){

        $transactions =  Transaction::all();
        return view ('admin.transaction.index')->with('transactions', $transactions);

    }

    public function editTransaction($id){
        $transaction = Transaction::findorfail($id);
        
        return view('admin.transaction.edit')->with('transaction',$transaction);
    }


    public function updateTransaction($id){
        $transaction = Transaction::findorfail($id);
        $transaction->status = request('status');
        $transaction->save();

        return redirect('/dashboard-admin/transaction');

    }

    public function destroyTransaction($id){
        $transaction =  Transaction::findorfail($id);
        //dd($campaign); 
        
            $transaction->delete();

            return redirect('/dashboard-admin/transaction');
    }


    public function viewContests(){

        $contests =  Contest::all();
        return view ('admin.contest.index')->with('contests', $contests);

    }

    public function editContest($id){
        $contest = Contest::findorfail($id);
        
        return view('admin.contest.edit')->with('contest',$contest);
    }

    public function updateContest($id){
        $contest = Contest::findorfail($id);
        $contest->status = request('status');
        $contest->save();

        return redirect('/dashboard-admin/contest');

    }

    public function destroyContest($id){
        $contest =  Contest::findorfail($id);
        //dd($campaign); 
        
            $contest->delete();

            return redirect('/dashboard-admin/contest');
    }


    public function viewContestants(){

        $contestants =  Contestant::all();
        return view ('admin.contestant.index')->with('contestants', $contestants);
    }

    public function editContestant($id){
        $contestant = Contestant::findorfail($id);
        
        return view('admin.contestant.edit')->with('contestant',$contestant);
    }


    public function updateContestant($id){
        $contesant = Contestant::findorfail($id);
        $contesant->status = request('status');
        $contesant->save();

        return redirect('/dashboard-admin/contesant');

    }

    public function destroyContestant($id){
        $contesant =  Contestant::findorfail($id);
        //dd($contesant); 
       
            $img = 'contestant_image/'.$contesant->contestant_img;
            if (File::exists($img)) {
                File::delete($img);
            }
            $contesant->delete();

            return redirect('/dashboard-admin/contesant');
        }
    


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
