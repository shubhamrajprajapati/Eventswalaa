@extends('layouts.frontend')
@section('title')Confirm password - Events walaa @endsection
@section('keywords')Confirm password - Events walaa @endsection
@section('description')Confirm password - Events walaa @endsection
@section('content')
<section class="pt-5">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-4">
            <div class="card box-shadow border-none">
                <div class="card-header bg-default text-white border-none">{{ __('Confirm Password') }}</div>

                <div class="card-body border-none">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
