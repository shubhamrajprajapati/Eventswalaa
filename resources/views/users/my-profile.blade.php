@extends('layouts.frontend')
@section('title')Events walaa - My Reviews @endsection
@section('keywords')Events walaa - My Reviews @endsection
@section('description')Events walaa - My Reviews @endsection

@section('content')
<section class="pt-5">
    <div class="container pt-4">
        <div class="mt-5">
            <div class="card box-shadow border-none ">
                <div class="card-header bg-default text-white border-none h4">
                    {{ __('My Profile') }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 border-right">
                            @include('layouts.includes.users.menu-link')
                        </div>
                        <div class="col-md-9 ">
                          
                          <form action="{{ url('profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                    <div class="row form-group">
                       <div class="col-md-2">
                            <label for="name">First Name</label>
                       </div>
                       <div class="col-md-6">
                            <input type="text" name="name" class="form-control" required="" value="{{ Auth::user()->name }}">
                       </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Last Name</label>
                        </div>
                       <div class="col-md-6">
                        <input type="text" name="lname" class="form-control" required="" value="{{ Auth::user()->lname }}">
                      </div>
                    </div>
    
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Address 1 ( Flat No, Apt No, &amp; Address)</label>
                        </div>
                       <div class="col-md-6">
                        <textarea class="form-control" name="address1" col="5" required="">{{ Auth::user()->address1 }}</textarea>
                     </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Address 2 ( Landmark Near By )</label>
                        </div>
                       <div class="col-md-6">
                        <textarea class="form-control" name="address2" col="5">{{ Auth::user()->address2 }}</textarea>
                     </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">City</label>
                        </div>
                       <div class="col-md-6">
                        <input type="text" class="form-control" name="city" required="" value="{{ Auth::user()->city }}">
                     </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">State</label>
                        </div>
                       <div class="col-md-6">
                        <input type="text" class="form-control" name="state" required="" value="{{ Auth::user()->state }}">
                      </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Pincode / Zipcode</label>
                        </div>
                       <div class="col-md-6">
                        <input type="number" class="form-control" name="pincode" required="" value="{{ Auth::user()->pincode }}">
                     </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Phone No</label>
                        </div>
                       <div class="col-md-6">
                        <input type="number" class="form-control" name="phone" required="" value="{{ Auth::user()->phone }}">
                     </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Alternate Phone No</label>
                        </div>
                       <div class="col-md-6">
                        <input type="number" class="form-control" name="alternet_phone" value="{{ Auth::user()->alternet_phone }}">
                      </div>
                    </div>
                    <div class="row form-group">
                       <div class="col-md-2">
                        <label for="name">Email</label>
                        </div>
                       <div class="col-md-6">
                        <input type="text" readonly="" class="form-control" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                         <label for="name">Profile Image</label>
                         </div>
                        <div class="col-md-6">
                        <img src="{{ asset('uploads/profile/'.Auth::user()->image)}}" class="w-25">
                        <input type="file" name="image" id="" class="form-control">
                       </div>
                     </div>
                    
                     <div class="row form-group mb-4">
                       <div class="col-md-2"></div>
                           <div class="col-md-6">
                                <button type="submit" class="btn  btn-primary col-md-12">Update Profile
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
</section>