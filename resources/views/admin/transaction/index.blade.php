
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
                            <td>Contestant ID</td>
                            <td>Email</td> 
                            <td>Number of Votes</td>
                            <td>Amount</td>
                            <td>Payment Ref</td>
                            <td>status</td> 
                      
                            </tr>
                            @foreach($transactions as $transaction)
                            <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{$transaction->contest_id}}</td>
                            <td>{{$transaction->contestant_id}}</td>
                            <td>{{$transaction->email}}</td>
                            <td>{{$transaction->number_of_votes}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->payment_ref}}</td>
                            <td>{{$transaction->status}}</td>
                            {{-- <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" 
                        data-toggle="toggle" data-on="Active"  data-off="InActive" {{ $user->status ? 'checked' : '' }}></td> --}}
                            <td>
                                <a class="btn btn-warning" href="/dashboard-admin/transaction/{{$transaction->id}}/edit" >Edit Transaction</a>
                                
                            </td>
                           
                            </tr>
                            @endforeach
                                <h5 class="alert alert-warning">No Transactions</h5>
                         </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection