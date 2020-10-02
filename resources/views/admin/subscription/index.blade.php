
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
                            <td> Timeline</td>
                            <td> Amount</td>
                            <td> Payment Ref</td>
                            <td> Payment Stack</td>
                            <td>status</td>
                            <td>status</td> 
                      
                            </tr>
                            @foreach($subscriptions as $subscription)
                            <tr>
                            <td>{{$subscription->id}}</td>
                            <td>{{$subscription->user_id}}</td>
                            <td>{{$subscription->timeline}}</td>
                            <td>{{$subscription->amount}}</td>
                            <td>{{$subscription->payment_ref}}</td>
                            <td>{{$subscription->paystack_ref}}</td>
                            <td>{{$subscription->status}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>
                                <a class="btn btn-warning" href="/dashboard-admin/subscription/{{$subscription->id}}/edit" >Edit Subscription</a>
                                
                            </td>
                           
                            </tr>
                            @endforeach
                                <h5>No User subscription</h5>
                         </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection