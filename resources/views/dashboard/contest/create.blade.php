@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Create a new Contest</h2>
                    
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contest.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="stage" class="col-md-4 col-form-label text-md-right">{{ __('Stage') }}</label>

                            <div class="col-md-6">
                                <input id="stage" type="text" class="form-control @error('stage') is-invalid @enderror" name="stage" value="{{ old('stage') }}" required autocomplete="stage" autofocus>

                                @error('stage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rules_&_regulatioins" class="col-md-4 col-form-label text-md-right">{{ __('Rules and Regulations') }}</label>

                            <div class="col-md-6">
                                <input id="rules_&_regulatioins" type="text" class="form-control @error('rules_&_regulatioins') is-invalid @enderror" name="rules_&_regulatioins" value="{{ old('rules_&_regulatioins') }}" required  autofocus>

                                @error('rules_&_regulatioins')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Contest') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection