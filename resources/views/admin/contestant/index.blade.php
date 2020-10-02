
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
                            <td>Contest ID</td>
                            <td>Assigned ID</td>
                            <td> First Name</td>
                            <td> Last Name</td>
                            <td> Status</td>
                            <td> Disqualified</td>
                      
                            </tr>
                            @foreach($contestants as $contestant)
                            <tr>
                            <td>{{$contestant->id}}</td>
                            <td>{{$contestant->contest_id}}</td>
                            <td>{{$contestant->contestant_id}}</td>
                            <td>{{$contestant->first_name}}</td>
                            <td>{{$contestant->last_name}}</td>
                            <td>{{$contestant->status}}</td>
                            <td>{{$contestant->disqualified}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>
                                <a class="btn btn-warning" href="/dashboard-admin/contestant/{{$contestant->id}}/edit" >Edit contestant</a>
                                
                            </td>
                           
                            </tr>
                            @endforeach
                                <h5 class="alert alert-warning">No contestant</h5>
                         </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection