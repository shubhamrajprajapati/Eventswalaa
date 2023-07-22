@extends('layouts.frontend')
@section('title')List Your Business - Venue wala @endsection
@section('keywords')List Your Business - Venue wala @endsection
@section('description')List Your Business - Venue wala @endsection

@section('content')
    <section class="main-wrapper">
        <div class="pt-4">.</div>
        <div class="container border-radious1 box-shadow" >
           <div class="row ">
                <div class="col-lg-12">
                    <div class="h4 mt-4">
                       Add venue information 
                    </div>
                    <p class="mb-4">
                        Add a detailed description of your venue property. Our content team may revise your description to ensure quality and search engine optimization with your permission.
                    </p>
                </div>
           </div>
           <div class="row">
            <div class="col-lg-12">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
                <div class="col-lg-6 pb-4">
                    <div class="p-3 border-radious1 box-shadow">
                        <form action="{{ url('/business-store') }}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <input type="text" name="venue_name" placeholder="Venue Name" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="country" placeholder="India" value="India" class="form-control" id="" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" name="state" placeholder="State" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" placeholder="City" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" placeholder="Complete address of the venue" class="form-control" id="" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="max_capacity" placeholder="Venue max capacity" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                               <textarea name="description" id="" rows="5" placeholder="Description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="venue_url" placeholder="Venue website URL" class="form-control" id="" >
                            </div>
                            <div class="h4 my-4">
                                Add contact information
                            </div>
                            <div class="form-group">
                                <input type="text" name="owner_name" placeholder="Venue owner name" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="owner_phone" placeholder="Venue owner mobile no" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="owner_email" placeholder="Email Id" class="form-control" id="" required>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="terms" required> I hereby agree to EventsWalaa <a href="{{url('/terms-and-conditions')}}">Terms </a>  and <a href="{{url('/privacy-policy')}}">Privacy Policy</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary col-lg-6">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="my-4">
                        <img src="{{ asset('assets/images/special-offer.png') }}" class="mx-auto d-block img-fluid"  alt="special-offer">
                    </div>
                    <div class="h4 ml-3">
                        List your business
                    </div>
                    <ul>
                        <li>Join VenueLook to change the way you Work</li>
                        <li> Start earning right away!</li>
                        <li> Share your details and we’ll reach out with next steps.</li>
                    </ul>
                </div>
           </div>
        </div>
    </section>
@include('layouts.model')

@endsection

