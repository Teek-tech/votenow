@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>View Contestants</h2>
                    
                </div>

                <div class="card-body">

                 
                   
                    @forelse($contestants as $contestant)
                    <img src="/contestant_image/{{$contestant->contestant_img}}" alt="">
                        <h2>
                            <span style="color: red">Contestant  : </span> 
                            <a href="">{{$contestant->first_name}} {{$contestant->last_name}}</a>
                        </h2>
                           
                        <hr>
                    @empty
                       No Contestant Added
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection