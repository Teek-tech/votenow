@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2> campaigns</h2>
                    <h5><a href="{{route('campaign.create')}}">Create campaigns</a></h5>
                </div>

                <div class="card-body">
                        @forelse($campaigns as $campaign)
                            <h5>{{$campaign->title}}</h5>
                            <a href="{{route('campaign.show',$campaign->id)}}">View campaign</a>
                        @empty
                            <h3>No Campaigns created</h3>
                        @endforelse
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
