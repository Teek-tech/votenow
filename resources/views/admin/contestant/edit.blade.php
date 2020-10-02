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

                        <img src="/contestant_image/{{$contestant->contestant_img}}" alt="" srcset="">
                        <h6>{{$contestant->img}}</h6>

                        <p></p>
                        <p></p>
                        <p></p>


                        <h4> <span style="color: blue"> contestant Id: </span>{{$contestant->id}}</h4>
                        <h4> <span style="color: blue"> Contest ID: </span> {{$contestant->contest_id}}</h4>
                        <h4> <span style="color: blue"> contestant Assigned ID: </span> {{$contestant->contestant_id}}</h4>
                        <h4> <span style="color: blue">contestant First Name: </span>{{$contestant->first_name}}</h4>
                        <h4> <span style="color: blue">contestant Last Name: </span>{{$contestant->last_name}}</h4>
                        <h4> <span style="color: blue">contestant Other Name: </span>{{$contestant->other_name}}</h4>
                        <h4> <span style="color: blue"> Country: </span>{{$contestant->country}}</h4>
                        <h4> <span style="color: blue"> City: </span>{{$contestant->city}}</h4>
                        <h4> <span style="color: blue"> Phone: </span>{{$contestant->phone}}</h4>
                        <h4> <span style="color: blue"> Birth Month: </span>{{$contestant->birth_month}}</h4>
                        <h4> <span style="color: blue"> Day: </span>{{$contestant->day}}</h4>
                        <h4> <span style="color: blue"> Gender: </span>{{$contestant->gender}}</h4>
                        <h4> <span style="color: blue"> Facebook: </span>{{$contestant->facebook}}</h4>
                        <h4> <span style="color: blue"> Instagram: </span>{{$contestant->instagram}}</h4>
                        <h4> <span style="color: blue"> Twitter: </span>{{$contestant->twitter}}</h4>
                        <h4> <span style="color: blue"> Youtube: </span>{{$contestant->youtube}}</h4>
                        <h4> <span style="color: blue"> Total Social Votes: </span>{{$contestant->total_social_votes}}</h4>
                        <h4> <span style="color: blue"> Judge 1: </span>{{$contestant->judge_1}}</h4>
                        <h4> <span style="color: blue"> Judge 2: </span>{{$contestant->judge_2}}</h4>
                        <h4> <span style="color: blue"> Judge 3: </span>{{$contestant->judge_3}}</h4>
                        <h4> <span style="color: blue">Total Judge Votes: </span>{{$contestant->total_judge_votes}}</h4>
                        <h4> <span style="color: blue"> Tally Votes: </span>{{$contestant->tally_vote}}</h4>
                        <h4> <span style="color: blue">Total Tally Votes: </span>{{$contestant->total_tally_vote}}</h4>
                        <h4> <span style="color: blue">Status: </span>{{$contestant->status}}</h4>
                        <h4> <span style="color: blue">Disqualified: </span>{{$contestant->disqualified}}</h4>
                 
             <form action="/dashboard-admin/contestant/{{$contestant->id}}/update" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="status" id="status" value="1" hidden>
                            <input class="btn btn-primary" type="submit" value="Verify contestant">
             </form>    
                        <p></p>
                        <p></p>
                        <p></p>

    

                        <form action="/dashboard-admin/contestant/{{$contestant->id}}/delete" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-danger" value="Delete contestant">
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
