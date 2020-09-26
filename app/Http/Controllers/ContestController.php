<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Campaign;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contests = Contest::all();
        return view('dashboard.contest.index')->with('contests', $contests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Campaign $campaign)
    {   //dd($campaign);
        return view('dashboard.contest.create',compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Campaign $campaign, Request $request)
    {
     
        $request->validate([
            'stage'=>'required|',
            'title'=>'required|max:50',
            'description'=>'required| max: 200',
            'regulations'=>'required| max:200',
        ]);

        $contest = new Contest;
        $contest->campaign_id = $campaign->id;
        $contest->stage = request('stage');
        $contest->title = request('title');
        $contest->description = request('description');
        $contest->regulations = request('regulations');;
        $contest->save();

        return 'Contest added';
        //return view('dashboard.contest.index')->with('status', 'New contest added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function show(Contest $contest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function edit(Contest $contest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contest $contest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contest $contest)
    {
        //
    }
}
