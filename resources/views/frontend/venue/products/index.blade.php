@extends('layouts.frontend')
@section('title'){{$category->meta_title}} - Venue wala @endsection
@section('keywords'){{$category->meta_title}} - Venue wala @endsection
@section('description'){{$category->meta_title}} - Venue wala @endsection

@section('content')
    <section class="main-wrapper">
        <div class="container">
            {{-- <div class="col-lg-12">
                <div class="h4 mt-4 mb-4">
                    <a class="text-decoration-none text-dark" href="{{url('/venue')}}">{{$category->meta_title}} </a>
                </div> 
            </div> --}}
                    <livewire:frontend.product.index :category="$category" :searchcategories="$searchcategories"/>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="mt-4"></div>
                    <div class="inquiry-form">
                        <div class="h1">
                            Contact Us
                        </div>
                        <p>
                            +91-8595104872
                        </p>
                    </div>
                    <div class="card sticky-top inquiry-form">
                        <form action="contact-submit" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="text" name="name" class="form-control" required="" placeholder="Your Name" style="border: 1px solid #000;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="number" name="phone" class="form-control" required="" placeholder="Phone Number" style="border: 1px solid #000;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name" style="border: 1px solid #000;">
                                </div>
                            </div>
    
                            <div class="col-md-12">
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Id" style="border: 1px solid #000;">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea name="message" class="form-control" cols="5" rows="5" placeholder="Message" style="border: 1px solid #000;"></textarea>
                                </div>
                            </div>
                            <div class=" col-md-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-md col-md-12">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                   
        </div>

               
    </section>
    {{-- @include('layouts.model') --}}
@endsection
