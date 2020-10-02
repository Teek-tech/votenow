
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
                            <td>Campaign ID</td>
                            <td> Stage</td>
                            <td> Title</td>
                            <td> Description</td>
                            <td>Status</td>
                      
                            </tr>
                            @foreach($contests as $contest)
                            <tr>
                            <td>{{$contest->id}}</td>
                            <td>{{$contest->campaign_id}}</td>
                            <td>{{$contest->stage}}</td>
                            <td>{{$contest->title}}</td>
                            <td>{{$contest->description}}</td>
                            <td>{{$contest->status}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>
                                <a class="btn btn-warning" href="/dashboard-admin/contest/{{$contest->id}}/edit" >Edit contest</a>
                                
                            </td>
                           
                            </tr>
                            @endforeach
                                <h5 class="alert alert-warning">No Contest</h5>
                         </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection