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

                        <h4> <span style="color: blue"> subscription Id: </span>{{$subscription->id}}</h4>
                        <h4> <span style="color: blue"> User ID: </span> {{$subscription->user_id}}</h4>
                        <h4> <span style="color: blue"> subscription Title: </span> {{$subscription->timeline}}</h4>
                        <h4> <span style="color: blue">subscription Description: </span>{{$subscription->amount}}</h4>
                        <h4> <span style="color: blue">subscription Description: </span>{{$subscription->payment_ref}}</h4>
                        <h4> <span style="color: blue">subscription Description: </span>{{$subscription->paystack_ref}}</h4>
                        <h4> <span style="color: blue">subscription status: </span> {{$subscription->status}}</h4>
                       
                        <form action="/dashboard-admin/subscription/{{$subscription->id}}/update" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input class="btn btn-primary" type="submit" value="Verify Subscription">
                        </form>
                        
                        <p></p>
                        <p></p>
                        <p></p>

                        <form action="/dashboard-admin/subscription/{{$subscription->id}}/delete" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger" value="Delete subscription">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
