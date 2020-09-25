@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
              
                <div class="card-body">
                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{route('profile.update', $user)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="">First Name</label>
                        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                        @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
                        @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="">phone1</label>
                        <input type="text" name="phone1" value="{{$user->phone2}}" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}">
                        @error('phone2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="">phone2</label>
                        <input type="text" name="phone2" value="{{$user->phone2}}" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}">
                        @error('phone2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="country" value="{{$user->country}}" class="form-control @error('country') is-invalid @enderror" value="{{ old('country') }}">
                        @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" value="{{$user->city}}" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                        @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Account Name</label>
                        <input type="text" name="bank_account_name" value="{{$user->bank_account_name}}" class="form-control @error('bank_account_name') is-invalid @enderror" value="{{ old('bank_account_name') }}">
                        @error('bank_account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Account Number</label>
                        <input type="text" name="bank_account_number" value="{{$user->bank_account_number}}" class="form-control @error('bank_account_number') is-invalid @enderror" value="{{ old('bank_account_number') }}">
                        @error('bank_account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Bank Name</label>
                        <input type="text" name="bank_name" value="{{$user->bank_name}}" class="form-control @error('bank_name') is-invalid @enderror" value="{{ old('bank_name') }}">
                        @error('bank_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Profile Image</label>
                        <input type="file" name="image" value="{{$user->image}}" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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