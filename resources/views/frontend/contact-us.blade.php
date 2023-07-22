@extends('layouts.frontend')

@section('content')

@extends('layouts.frontend')
@section('title')Events walaa - Contact us @endsection
@section('keywords')Events walaa - Contact us @endsection
@section('description')Events walaa - Contact us @endsection

@section('content')
    <section class="main-wrapper">
        <div class="pt-5"></div>
        <div class="container mb-5 box-shadow bg-white">
            <div class="row">
               <div class="col-md-12">
                  <div class="contact-heading h4 mt-4 text-center mb-4">
                     Say hello to us
                  </div>
                  <div class="my-4"></div>
               </div>
            </div>
            <div class="row pb-4">
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
               <div class="col-md-6">
                  <div id="contact-us-form" class="box-shadow p-3">
                     <form action="{{ route('contact-form.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group" required>
                                 <select name="occasion_type" id="" class="form-control" >
                                    <option value="corporate-party">Corporate party</option>
                                    <option value="wedding-management">Wedding management</option>
                                    <option value="merriage-anniversary">Merriage anniversary</option>
                                    <option value="birthday-party">Birthday party</option>
                                    <option value="engagement">Engagement</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                <input type="date" name="date" id="" placeholder="Select Occasion Date *" class="form-control" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                <input type="text" name="venue_address" id="" class="form-control" placeholder="Enter your address"  required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <input type="number" name="no_guests" class="form-control" placeholder="No Of guests *" required>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <select name="budget_range" class="form-control" required>
                                    <option  value="" >Select Budget Range</option>
                                    <option value="1800+">1800+</option>
                                    <option value="1600-1800">1600-1800 </option>
                                    <option value="1400-1600">1400-1600 </option>
                                    <option value="1200-1400">1200-1400 </option>
                                    <option value="1000-1200">1000-1200 </option>
                                    <option value="800-1000">800-1000 </option>
                                    <option value="600-800">600-800 </option>
                                    <option value="400-600">400-600 </option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <select class="form-control" name="req_meal" required>
                                    <option value="Veg">Only Veg</option>
                                    <option value="Non Veg">Both Veg and Non Veg</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <select class="form-control" name="req_drinks" required>
                                    <option value="No Alcohol">Soft Drinks</option>
                                    <option value="Alcohol">Alcoholic Drinks</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Enter your name *" id="" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input type="number" name="mobile" class="form-control" placeholder="Enter your mobile *" id="" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control" placeholder="Enter your email" id="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea name="notes" placeholder="Notes" class="form-control" rows="2"></textarea>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-md col-md-12">Check availability</button>
                              </div>
                           </div>
                        </div> {{-- Row --}}
                     </form>
                  </div>
               </div>
               <div class="col-md-5 offset-md-1">
                  <div class="padding-top-2x visible-xs"></div>
                  <div class="contact-us-pad visible-sm visible-md visible-lg"></div>
                  <div class="address-heading h4 mt-5">
                    Events walaa
                  </div>
                  <div class="address-subheading">
                     Sector 1, Greater Noida Noida Extension
                     <br>Gautam Buddh Nagar
                  </div>
                  <div class="country-name">
                     Uttar Pradesh - 201306
                  </div>
                  <div class="address-phone">
                     <span class="fa fa-phone " aria-hidden="true "></span>&nbsp;+91 - 88829-76880
                  </div>
                  <div class="address-phone">
                     <span class="fa fa-envelope-o " aria-hidden="true "></span> &nbsp;inquiry@eventswalaa.com
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