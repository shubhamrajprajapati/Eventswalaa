
@extends('layouts.frontend')
@section('title')Events walaa - User Dashboard @endsection
@section('keywords')Events walaa - User Dashboard @endsection
@section('description')Events walaa - User Dashboard @endsection


@section('content')
<section class="pt-5">
    <div class="container  pt-4">
        <div class="mt-5">
                <div class="card box-shadow border-none ">
                    <div class="card-header bg-default text-white border-none h4">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                       <div class="row">
                        <div class="col-lg-3">
                            @include('layouts.includes.users.menu-link')
                        </div>
                        <div class="col-md-9 mt-4">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
