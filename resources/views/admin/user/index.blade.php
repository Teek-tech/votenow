
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

                    <div class="tabale-responsive">
                        <table style="width:100%" class="table table-bordered">
                            
                            <tr>
                            <td>Id</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>status</td> 
                            <td>Admin</td>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>{{$user->isAdmin}}</td>
                            <td>
                                <a class="btn btn-danger" href="/dashboard-admin/user/{{$user->id}}/edit">Edit User</a>
                                
                            </td>
                           
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
{{-- <script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var user_id = $(this).data('id'); 
             
            $.ajax({
                type: "GET",
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
     --}}