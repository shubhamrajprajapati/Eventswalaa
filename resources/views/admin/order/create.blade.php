@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Order Create</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/orders') }}"  class="btn btn-dark btn-sm float-right mr-4">Back</a> 
                </div>
            </div>
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
            <div class="col-lg-12">
                <form action="{{ url('/admin/orders') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <select name="user_id" id="" class="custom-select2 form-control" >
                           <option value="">Select User Name</option>
                           <option value="No">No name </option>
                             @foreach ($hotelName as $hotelItem)
                                 <option value="{{ $hotelItem->id}}">{{ $hotelItem->name}} - {{ $useritem->email}}</option>
                             @endforeach
                        </select>
                     </div>
                  </div>
                    <div class="col-lg-6">
                        <div class="form-group" required>
                           <select name="user_id" id="" class="custom-select2 form-control" >
                              <option value="">Select User Name</option>
                              <option value="No">No name </option>
                                @foreach ($users as $useritem)
                                    <option value="{{ $useritem->id}}">{{ $useritem->name}} - {{ $useritem->email}}</option>
                                @endforeach
                           </select>
                           <small> <a class="text-danger" href="{{ url('https://eventswalaa.com/register')}}" target="_blank"> Please register here </a></small>

                        </div>
                     </div>
                   <div class="col-lg-6">
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
                   <div class="col-lg-6">
                      <div class="form-group">
                        <input type="date" name="date" id="" placeholder="Select Occasion Date *" class="form-control" required>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="venue_address" id="" class="form-control" placeholder="Enter your address" required>
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
                   <div class="col-lg-6">
                      <div class="form-group">
                         <input type="text" name="name" class="form-control" placeholder="Enter your name *" id="" required>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                         <input type="number" name="mobile" class="form-control" placeholder="Enter your mobile *" id="" required>
                      </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="form-group" >
                        <select name="tracking_msg" class="form-control">
                            <option value="0">Tracking Message</option>
                            <option value="1">Lead</option>
                            <option value="2">Talk counselor</option>
                            <option value="3">Reject</option>
                            <option value="4">Success</option>
                        </select>
                    </div>
                 </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                        <select name="email" id="" class="custom-select2 form-control">
                           <option value="">Select User Email id</option>
                           <option value="No">Other</option>
                            @foreach ($users as $useritem)
                           <option value="{{ $useritem->email}}">{{ $useritem->email}}</option>
                           @endforeach
                        </select>
                      </div>
                   </div>
                   <div class="col-lg-12">
                      <div class="form-group">
                         <textarea name="notes" placeholder="Notes" class="form-control" id="editor"></textarea>
                      </div>
                   </div>
                   <div class="col-lg-12">
                        <div class="form-group">
                            <input type="checkbox" name="status" > Checked = Hidden, Un-Checked = Visible
                        </div>
                   </div>
                   <div class="col-lg-12">
                      <div class="form-group">
                         <button type="submit" class="btn btn-dark btn-md col-md-3">Submit Lead</button>
                      </div>
                   </div>
                </div> {{-- Row --}}
             </form>
          </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
          
@endsection