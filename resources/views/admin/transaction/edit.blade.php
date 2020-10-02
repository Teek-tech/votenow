@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>

                        <h4> <span style="color: blue"> transaction Id: </span>{{$transaction->id}}</h4>
                        <h4> <span style="color: blue"> Contest ID: </span> {{$transaction->contest_id}}</h4>
                        <h4> <span style="color: blue"> Contestant ID: </span> {{$transaction->contestant_id}}</h4>
                        <h4> <span style="color: blue"> Email: </span> {{$transaction->email}}</h4>
                        <h4> <span style="color: blue">Number of Votes: </span>{{$transaction->number_of_votes}}</h4> 
                        <h4> <span style="color: blue">Amount: </span>{{$transaction->amount}}</h4>
                        <h4> <span style="color: blue">Payment Ref: </span>{{$transaction->payment_ref}}</h4>
                        <h4> <span style="color: blue">Status: </span> {{$transaction->status}}</h4>
                       
                        <form action="/dashboard-admin/transaction/{{$transaction->id}}/update" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input class="btn btn-primary" type="submit" value="Verify transaction">
                        </form>
                        
                        <p></p>
                        <p></p>
                        <p></p>

                        <form action="/dashboard-admin/transaction/{{$transaction->id}}/delete" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger" value="Delete transaction">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
