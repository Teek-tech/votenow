@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit user Information</h4>
                    <h4><span style="color: blue"> Name: </span> {{$user->first_name}} {{$user->last_name}}</h4>
                </div>

                    <div>
                        
                       <h5> <span style="color: blue"> Email: {{$user->email}}</h5>
                       <h5> <span style="color: blue" >Phone: </span>{{$user->phone1}}</h5>
                       <h5> <span style="color: blue">Phone2: </span>{{$user->phone2}}</h5>
                       <h5> <span style="color: blue">Country </span>{{$user->country}}</h5>
                       <h5> <span style="color: blue">City: </span>{{$user->city}}</h5>
                       <h5> <span style="color: blue">Account name:</span> {{$user->bank_account_name}}</h5>
                       <h5> <span style="color: blue">Account number: </span>{{$user->bank_account_number}}</h5>
                       <h5> <span style="color: blue">Bank name: </span>{{$user->bank_name}}</h5>

                       <div>
                           <img src="/profile_image/{{$user->image}}" alt="" srcset="">
                       </div>

                       <form method="POST" action="/dashboard-admin/user/{{$user->id}}/update">
                            @csrf

                            @method('patch')

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __(' Verify Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="checkbox"  name="status"  required value="1" autofocus>
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isAdmin" class="col-md-4 col-form-label text-md-right">{{ __('Make Admin') }}</label>

                            <div class="col-md-6">
                                <input id="isAdmin" type="checkbox"  name="isAdmin"  value="1" autofocus>
                                    
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update User ') }}
                                </button>
                            </div>
                        </div>

                       </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
