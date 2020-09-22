<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-solid alert-success col-md-10" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          <strong>Success!</strong> {{ session('success') }}
      </div>
@endif
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
        <input type="text" name="phone1" value="{{$user->phone1}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">phone2</label>
        <input type="text" name="phone2" value="{{$user->phone2}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">City</label>
        <input type="text" name="country" value="{{$user->country}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Country</label>
        <input type="text" name="city" value="{{$user->city}}" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</body>
</html>