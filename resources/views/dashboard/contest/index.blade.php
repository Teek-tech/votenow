@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>View Contests</h2>
                    
                </div>

                <div class="card-body">
                   
                    @forelse($contests as $contest)
                        <h2><span style="color: red">Title: </span> {{$contest->title}}</h2>
                        <h4><span style="color: red"> Contest description: </span> {{$contest->description}}</h4>
                            <a class="btn btn-dark" href="/dashboard/contest/{{$contest->id}}/contestant/create">Add Contestant</a>
                        <hr>
                    @empty
                        <h3>No contests created</h3>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection