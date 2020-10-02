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

                    You are logged in!

                    <div>
                        
                        <h4><a href="{{route('admin.users')}}">View Users</a></h4>
                        <h4><a href="{{route('admin.viewCampaigns')}}">View Campaigns</a></h4>
                        <h4><a href="{{route('admin.viewSubcriptions')}}">View subscriptions</a></h4>
                        <h4><a href="{{route('admin.viewTransactions')}}">View Transactions</a></h4>
                        <h4><a href="{{route('admin.viewContests')}}">View Contests</a></h4>
                        <h4><a href="{{route('admin.viewContestants')}}">View Contestants</a></h4>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
