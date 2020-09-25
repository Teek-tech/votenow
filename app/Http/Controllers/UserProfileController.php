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
            'first_name' => 'required|min:2|max:15',
            'last_name' => 'required|min:2|max:15',
            'email' => 'required|email|max:20',
            'phone1' => 'required|min:11|max:11',
            'phone2' => 'required|min:11|max:11',
            'country' => 'required',
            'city' => 'required|min:10',
            'bank_account_name' => 'required|min:10|max:10',
            'bank_name' => 'required|min:3|max:30',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);
        if ($request->hasFile('image')) {
                    $oldimg1 = 'profile_image/'.$updateProduct->image;
                    if (File::exists($oldimg1)) {
                        File::delete($oldimg1);
                    }
                    $imageOne = $request->file('image');
                    $filename1 = '_image'.time().'.'.$imageOne->getClientOriginalExtension();
                    Image::make($imageOne)->resize(300, 300)->save(public_path('/profile_image/'.$filename1));
                    $updateProduct->image = $filename1;
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
            'image' => $filename1,
            'terms' => 1
        ]);
       return redirect()->route('profile.index')->with('success', 'Profile Updated!');
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
