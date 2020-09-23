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
        
        // $user->update([
        //     'first_name' => $request->input('first_name'),
        //     'last_name' => $request->input('last_name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone1'),
        //     'phone' => $request->input('phone2'),
        //     'country' => $request->input('country'),
        //     'city' => $request->input('city'),
        //     'bank_account_name' => $request->input('bank_account_name'),
        //     'bank_account_number' => $request->input('bank_account_number'),
        //     'bank_name' => $request->input('bank_name'),

        //     if ($request->hasFile('image')) {
        //         $oldimg1 = 'profile_image/'.$updateProduct->image;
        //         if (File::exists($oldimg1)) {
        //             File::delete($oldimg1);
        //         }
        //         $imageOne = $request->file('image');
        //         $filename1 = '_image'.time().'.'.$imageOne->getClientOriginalExtension();
        //         Image::make($imageOne)->resize(300, 300)->save(public_path('/profile_image/'.$filename1));
        //         $updateProduct->image = $filename1;
        //     }

           
        // ]);

         $user = auth()->user();
         $user->first_name = request('first_name');
         $user->last_name = request('last_name');
         $user->email = request('email');
         $user->phone1= request('phone1');
         $user->phone2= request('phone2');
         $user->country = request('country');
         $user->city = request('city');
         $user->bank_account_name = request('bank_account_name');
         $user->bank_account_number = request('bank_account_number');
         $user->bank_name = request('bank_name');

         $user->save();
         //dd($user);
            return('profile updated');
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
