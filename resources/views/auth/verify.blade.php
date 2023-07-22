@extends('layouts.app')
@section('title')Verify Password - Events walaa @endsection
@section('keywords')Verify Password - Events walaa @endsection
@section('description')Verify Password - Events walaa @endsection

@section('content')
<section class="pt-5">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-4">
            <div class="card box-shadow border-none">
                <div class="card-header  bg-default text-white border-none">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body border-none">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
