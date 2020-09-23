@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
        <form action="{{route('profile.update', $user)}}" method="POST">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="">First Name</label>
        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$user->email}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">phone1</label>
        <input type="text" name="phone1" value="{{$user->phone2}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">phone2</label>
        <input type="text" name="phone2" value="{{$user->phone2}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Country</label>
        <input type="text" name="country" value="{{$user->country}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="city" value="{{$user->city}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Account Name</label>
        <input type="text" name="bank_account_name" value="{{$user->bank_account_name}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Account Number</label>
        <input type="text" name="bank_account_number" value="{{$user->bank_account_number}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Bank Name</label>
        <input type="text" name="bank_name" value="{{$user->bank_name}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Profile Image</label>
        <input type="file" name="profile_image" value="{{$user->profile_image}}" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection