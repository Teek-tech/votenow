<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class UserProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =  auth()->user();
        return view('dashboard.profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $user =  User::findorfail($id);
        //return view('admin.Product.index');

        return view('dashboard.user.show')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:15',
            'last_name' => 'required|min:3|max:15',
            'email' => 'required|email|max:30',
            'phone1' => 'required|min:11|max:11',
            'phone2' => 'required|min:11|max:11',
            'country' => 'required',
            'city' => 'required|max:10',
            'bank_account_name' => 'required|min:3|max:50',
            'bank_name' => 'required|min:3|max:30',
            'image' => 'mimes:png,jpeg,jpg|max:4000',
        ]);
        if ($request->hasFile('image')) {
                    $oldimg = 'profile_image/'.$user->image;
                    if (File::exists($oldimg)) {
                        File::delete($oldimg);
                    }
                    $imageOne = $request->file('image');
                    $filename = '_image'.time().'.'.$imageOne->getClientOriginalExtension();
                    Image::make($imageOne)->resize(300, 300)->save(public_path('/profile_image/'.$filename));
                    $user->image = $filename;
                }
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'bank_account_name' => $request->input('bank_account_name'),
            'bank_account_number' => $request->input('bank_account_number'),
            'bank_name' => $request->input('bank_name'),
            'image' => $user->image,
            'terms' => 1
        ]);
       return back()->with('status', 'Profile Updated!');
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
