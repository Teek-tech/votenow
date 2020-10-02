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

                        <h4> <span style="color: blue"> contest Id: </span>{{$contest->id}}</h4>
                        <h4> <span style="color: blue"> Campaign ID: </span> {{$contest->campaign_id}}</h4>
                        <h4> <span style="color: blue"> contest Title: </span> {{$contest->stage}}</h4>
                        <h4> <span style="color: blue">contest Title: </span>{{$contest->title}}</h4>
                        <h4> <span style="color: blue">contest Description: </span>{{$contest->description}}</h4>
                        <h4> <span style="color: blue">contest Regulations: </span>{{$contest->regulations}}</h4>
                        <h4> <span style="color: blue">contest Facebook: </span>{{$contest->facebook}}</h4>
                        <h4> <span style="color: blue">contest Instagram: </span>{{$contest->instagram}}</h4>
                        <h4> <span style="color: blue">contest Twitter: </span>{{$contest->twitter}}</h4>
                        <h4> <span style="color: blue">contest Youtube: </span>{{$contest->youtube}}</h4>
                        <h4> <span style="color: blue">contest Total Social Votes: </span>{{$contest->total_social_votes}}</h4>
                        <h4> <span style="color: blue">contest Judge 1: </span>{{$contest->judge_1}}</h4>
                        <h4> <span style="color: blue">contest Judge 2: </span>{{$contest->judge_2}}</h4>
                        <h4> <span style="color: blue">contest Judge 3: </span>{{$contest->judge_3}}</h4>
                        <h4> <span style="color: blue">contest Total Judge Votes: </span>{{$contest->total_judge_votes}}</h4>
                        <h4> <span style="color: blue">contest Tally Votes: </span>{{$contest->tally_votes}}</h4>
                        <h4> <span style="color: blue">contest Total Tally Votes: </span>{{$contest->total_tally_votes}}</h4>
                        <h4> <span style="color: blue">contest status: </span> {{$contest->status}}</h4>
                       
                        <form action="/dashboard-admin/contest/{{$contest->id}}/update" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input class="btn btn-primary" type="submit" value="Verify contest">
                        </form>
                        
                        <p></p>
                        <p></p>
                        <p></p>

                        <form action="/dashboard-admin/contest/{{$contest->id}}/delete" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger" value="Delete contest">
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
