@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Users Dashboard</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="tabale-responsive">
                        <table style="width:100%" class="table table-bordered">
                            
                            <tr>
                            <td>Id</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Admin</td>
                            <td>status</td>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->isAdmin}}</td>
                            <td>{{$user->status}}</td>
                            <td><a class="btn btn-danger" href="/dashboard-admin/user/{{$user->id}}/edit">Edit User</a></td>
                           
                            </tr>
                            @endforeach
                     
                         </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
