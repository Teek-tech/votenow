<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('dashboard.campaign.index')->with('campaigns', $campaigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            'banner' => 'required|image|mimes:jpg,jpeg,png|max:500',
        ]);
       
        $campaign = new Campaign;
        $campaign->user_id = auth()->user()->id;
        $campaign->title = request('title');
        $campaign->description = request('description');

        if ($request->hasFile('banner')) {
            $ban_img = $request->file('banner');
            $filename = '_banner'.time().'.'.$ban_img->getClientOriginalExtension();
            Image::make($ban_img)->resize(300, 300)->save(public_path('/banner_image/'.$filename));
            $campaign->banner = $filename;
        }

        $campaign->save();
        return ('campaign created');
         //dd('testing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $campaign = Campaign::findorfail($id);
        //dd($campaign);
        return view('dashboard.campaign.show')->with('campaign', $campaign);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
