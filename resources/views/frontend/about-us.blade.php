@extends('layouts.frontend')
@section('title')Events walaa - About us @endsection
@section('keywords')Events walaa - About us @endsection
@section('description')Events walaa - About us @endsection

@section('content')
    <section class="main-wrapper">
        <div class="pt-5"></div>
            <div class="container border-radious1 box-shadow pb-4">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <div class="h4">
                            About Us Events walaa !
                        </div>
                        <div class="text-justify mt-4">
                            EventsWalaa is an Indian online event booking and management company founded in 2022. EventsWalaa is a product of Omniforce technologies Headquartered in Greater Noida, Uttar Pradesh. 
                        </div>
                            <div class="text-justify mt-4">
                            The company provides online event booking services including marriage, birthdays, anniversaries, corporate and, private parties. 
                            </div>
                            <div class="text-justify mt-4">
                            It makes a user to easily find and book venues and vendors across 30+ cities in India.
                           </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-shadow1 border-radius2 mt-4">
                            <img src="{{ asset('assets/images/about-us.jpg') }}" class="mx-auto d-block img-fluid" alt="Event Walaa">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <div class="h4 mt-5 text-center">
                        Try Events walaa today
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ url('/list-your-business')}}" class="btn btn-primary col-lg-4">List your business</a> 
                        <a href="#" data-toggle="modal" data-target="#inqueryModal"
                         class="ml-4 btn btn-primary col-lg-4">Request to Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.model')
@endsection

