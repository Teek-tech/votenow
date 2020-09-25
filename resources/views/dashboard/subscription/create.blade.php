@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subscribe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('subscription.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="timeline" class="col-md-4 col-form-label text-md-right">{{ __('Timeline') }}</label>

                            <div class="col-md-6">
                                <input id="timeline" type="text" class="form-control @error('timeline') is-invalid @enderror" name="timeline" value="{{ old('timeline') }}" required autocomplete="timeline" autofocus>

                                @error('timeline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payment_ref" class="col-md-4 col-form-label text-md-right">{{ __('Payment Ref') }}</label>

                            <div class="col-md-6">
                                <input id="payment_ref" type="payment_ref" class="form-control @error('payment_ref') is-invalid @enderror" name="payment_ref" value="{{ old('payment_ref') }}" required autocomplete="payment_ref">

                                @error('payment_ref')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paystack_ref" class="col-md-4 col-form-label text-md-right">{{ __('Paystack Ref') }}</label>

                            <div class="col-md-6">
                                <input id="paystack_ref" type="text" class="form-control @error('paystack_ref') is-invalid @enderror" name="paystack_ref" value="{{ old('paystack_ref') }}" required  autofocus>

                                @error('paystack_ref')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Subscribe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
