<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use App\Models\Contest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contestants = Contestant::all();
        return view('dashboard.contestant.index')->with('contestants', $contestants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Contest $contest)
    {
        //dd($contest);
        return view('dashboard.contestant.create')->with('contest', $contest);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Contest $contest ,Request $request)
    {
       $request->validate([
           'contestant_id'=>'required|',
           'first_name'=>'required|max:20',
           'last_name'=>'required|max:20',
           'other_name'=>'required|max:20',
           'country'=>'required|max:20',
           'city'=>'required|max:20',
           'phone'=>'required|max:20',
           'email'=>'required|max:50',
           'birth_month'=>'required|max:20',
           'day'=>'required|max:20',
           'gender'=>'required|max:7',
           'contestant_img' => 'required|image|mimes:jpg,jpeg,png|max:4000',
       ]);

        $contestant =  new Contestant;
        $contestant->contest_id = $contest->id;
        $contestant->contestant_id = request('contestant_id');
        $contestant->first_name = request('first_name');
        $contestant->last_name = request('last_name');
        $contestant->other_name = request('other_name');
        $contestant->country = request('country');
        $contestant->city = request('city');
        $contestant->phone = request('phone');
        $contestant->email = request('email');
        $contestant->birth_month = request('birth_month');
        $contestant->day = request('day');
        $contestant->gender = request('gender');

        if ($request->hasFile('contestant_img')) {
            $img = $request->file('contestant_img');
            $filename = '_contestant_img'.time().'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(300, 300)->save(public_path('/contestant_image/'.$filename));
            $contestant->contestant_img = $filename;
        }

        $contestant->save();
        //dd($contestant);
        return 'contestant added';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function show(Contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function edit(Contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contestant $contestant)
    {
        //
    }
}
