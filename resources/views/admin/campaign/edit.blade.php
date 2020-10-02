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
                        
                        <img src="/campaign_image/{{$campaign->banner}}" alt="" srcset="" width="100%" height="200px;">
                        <h6>{{$campaign->banner}}</h6>
                        <small>Campaign Banner</small>
                        <p></p>

                        <h4> <span style="color: blue"> Campaign Id: </span>{{$campaign->id}}</h4>
                        <h4> <span style="color: blue"> User ID: </span> {{$campaign->user_id}}</h4>
                        <h4> <span style="color: blue"> Campaign Title: </span> {{$campaign->title}}</h4>
                        <h4> <span style="color: blue">Campaign Description: </span>{{$campaign->description}}</h4>
                        <h4> <span style="color: blue">Campaign status: </span> {{$campaign->status}}</h4>
                       
                        <form action="/dashboard-admin/campaign/{{$campaign->id}}/update" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input class="btn btn-primary" type="submit" value="Verify User">
                        </form>
                        
                        <p></p>
                        <p></p>
                        <p></p>

                        <form action="/dashboard-admin/campaign/{{$campaign->id}}/delete" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger" value="Delete Campaign">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
