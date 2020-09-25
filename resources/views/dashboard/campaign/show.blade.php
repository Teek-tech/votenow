@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{$campaign->title}}</h2>
                    
                </div>

                <div class="card-body">
                    <div>
                        <img src="/banner_image/{{$campaign->banner}}" alt="" srcset="">
                    </div>
                    <h4>{{$campaign->description}}</h4>
                  {{-- <h5><a href="{{route('campaign',$campaign->id,'contest.create')}}">Add Contest</a></h5> --}}
                    <h5><a href="/dashboard/campaign/{{$campaign->id}}/contest/create">Add Contest</a></h5>
                    <h5><a href="{{route('contest.view')}}">View Contests</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection