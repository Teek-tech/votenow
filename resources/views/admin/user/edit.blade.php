<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="checkbox"  name="status"  required value="1" autofocus>
                               Verify User
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                    <form method="POST" action="/dashboard-admin/user/{{$user->id}}/updateAdmin">
                        @csrf

                        @method('patch')


                    <div class="form-group row">
                        <label for="isAdmin" class="col-md-4 col-form-label text-md-right">{{ __('Make Admin') }}</label>

                        <div class="col-md-6">
                            <input id="isAdmin" type="checkbox"  name="isAdmin"  required value="1" autofocus>
                           Make Admin
                            @error('isAdmin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitches" data-switchery='ON'>
                        <label class="custom-control-label" for="customSwitches">Toggle this switch element</label>
                    </div>

                   

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('verify Admin ') }}
                            </button>
                        </div>
                    </div>

                   </form>
                    <div>
                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  value="1" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
$(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "POST",
            dataType: "json",
            url: '/dashboard-admin/user/{user}/updateAdmin',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
