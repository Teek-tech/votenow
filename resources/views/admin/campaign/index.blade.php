
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
                            <td>User ID</td>
                            <td>Campaign Title</td>
                            <td>Campaign Description</td>
                            <td>status</td> 
                      
                            </tr>
                            @foreach($campaigns as $campaign)
                            <tr>
                            <td>{{$campaign->id}}</td>
                            <td>{{$campaign->user_id}}</td>
                            <td>{{$campaign->title}}</td>
                            <td>{{$campaign->description}}</td>
                            <td>{{$campaign->status}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>
                                <a class="btn btn-warning" href="/dashboard-admin/campaign/{{$campaign->id}}/edit" >Edit Campaign</a>
                                
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