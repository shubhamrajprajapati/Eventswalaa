@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0"> Add Hotel</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/products/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted Hotel</a>
                    <a href="{{ url('admin/products') }}"  class="btn btn-dark btn-sm float-right">Back</a> 
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

            {{-- start  --}}
                <div class="row px-4">
                    <div class="col-lg-12">
                        <form action="{{ url('admin/products') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                        Home
                                    </a>
                                    <a class="nav-item nav-link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="false">
                                        Details
                                    </a>
                                    <a class="nav-item nav-link" id="nav-otherdetails-tab" data-toggle="tab" href="#nav-otherdetails" role="tab" aria-controls="nav-otherdetails" aria-selected="false">
                                        Other details
                                    </a>
                                    <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">
                                        Hotel Address
                                    </a>
                                    <a class="nav-item nav-link" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="false">
                                        SEO Tags
                                    </a>
                                    <a class="nav-item nav-link" id="nav-images-tab" data-toggle="tab" href="#nav-images" role="tab" aria-controls="nav-images" aria-selected="false">
                                       Hotel Image
                                    </a>
                                    <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false">
                                        Status
                                    </a>
                                  
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row mt-4">
                                        {{-- <input type="hidden" name="user_id" value="{{Auth::id()}}"> --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="custom-select2 form-control" name="category_id" style="width: 100%; height: 38px">
                                                    @foreach ($categories as $category )
                                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Select Brand</label>
                                                <select class="custom-select2 form-control" name="brand" style="width: 100%; height: 38px">
                                                    <option value="0"> Others </option>
                                                    @foreach ($brands as $brand )
                                                        <option value="{{ $brand->name }}"> {{ $brand->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Owner phone No</label>
                                                <input type="text" name="hotel_phone" class="form-control" placeholder="Hotel Owner phone No">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Type</label>
                                                <select class="custom-select2 form-control" name="hotel_type" style="width: 100%; height: 38px">
                                                    <option value="">Select Hotel Type</option>
                                                    <option value="All">All </option>
                                                    <option value="Hotels"> Hotels </option>
                                                    <option value="Resorts"> Resorts </option>
                                                    <option value="Restaurants"> Restaurants </option>
                                                    <option value="Bars and nightclubs"> Bars and nightclubs </option>
                                                    <option value="Conference centers"> Conference centers </option>
                                                    <option value="Theaters"> Theaters </option>
                                                </select>
                                                {{-- <input type="text" name="hotel_type" class="form-control" placeholder="Hotel Type"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Hotel Description Or About Us</label>
                                                {{-- <input type="text" name="heading_description" placeholder="Add Heading" class="form-control"> --}}
                                                <textarea name="description" id="editor" ></textarea>
                                            </div>
                                        </div>
                                        {{-- hall --}}
                                        <div class="row px-4">
                                               <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for=""> All Party / Event Spaces</label>
                                                        <input type="text" name="all_party" class="form-control">
                                                    </div>
                                               </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    {{-- https://www.venuelook.com/delhi/viceroy-hall-of-welcomhotel-by-itc-hotels-dwarka-new-delhi-in-dwarka --}}
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_one" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_one" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_one" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_one" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_one" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_one" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_one" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_two" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_two" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_two" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_two" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_two" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_two" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_two" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_three" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_three" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_three" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_three" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_three" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_three" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_three" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_four" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_four" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_four" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_four" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_four" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_four" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_four" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_five" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_five" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_five" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_five" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_five" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_five" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_five" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_six" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_six" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_six" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_six" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_six" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="nonprice_six" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_six" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_seven" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_seven" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_seven" class="form-control">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_seven" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="veg_sell_price_seven" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="nonprice_seven" class="form-control" placeholder="Original Price">
                                                    <input type="text" name="non_sell_price_seven" class="form-control" placeholder="Selling Price">
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- End hall --}}

                                        <div class="form-group col-lg-12">
                                            <label for="">Space Capacity</label>
                                            <input type="text" name="space_capacity" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-otherdetails" role="tabpanel" aria-labelledby="nav-otherdetails-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Good For Occasions</label>
                                                <input type="text" name="heading_occasions" placeholder="Add Heading" class="form-control">
                                                <textarea name="good_for_occasions" id="editor1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Operating time</label>
                                            <input type="text" name="operating_time" class="form-control">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Cuisines Served</label>
                                                <input type="text" name="heading_cuisines" placeholder="Add Heading" class="form-control">
                                                <textarea name="cuisines_served" id="editor2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Facilities</label>
                                                <input type="text" name="heading_facilities" placeholder="Add Heading" class="form-control">
                                                <textarea name="facilities" id="editor3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Space Type</label>
                                                <input type="text" name="heading_space" placeholder="Add Heading" class="form-control">
                                                <textarea name="space_type" id="editor4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Car Parking</label>
                                                <input type="text" name="heading_parking" placeholder="Add Heading" class="form-control">
                                                <textarea name="car_parking" id="editor5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">More Information</label>
                                                <input type="text" name="heading_information" placeholder="Add Heading" class="form-control">
                                                <textarea name="more_information" id="editor6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">USPS power</label>
                                                <input type="text" name="heading_usps" placeholder="Add Heading" class="form-control">
                                                <textarea name="usps_power" id="editor7"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Room Details</label>
                                                <input type="text" name="heading_room" placeholder="Add Heading" class="form-control">
                                                <textarea name="room_details" id="editor8"></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Welcom Hotel</label>
                                                <input type="text" name="heading_welcome" placeholder="Add Heading" class="form-control">
                                                <textarea name="welcom_hotel" id="editor9"></textarea>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Service policy</label>
                                                <input type="text" name="heading_policy" placeholder="Add Heading" class="form-control">
                                                <textarea name="service_policy" id="editor10"></textarea>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Summary event space</label>
                                                <input type="text" name="heading_summary" placeholder="Add Heading" class="form-control">
                                                <textarea name="summary_event_space" id="editor11"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Nearest Landmark</label>
                                                <input type="text" name="heading_landmark" placeholder="Add Heading" class="form-control">
                                                <textarea name="nearest_landmark" id="editor12"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Policy terms</label>
                                                <input type="text" name="heading_terms" placeholder="Add Heading" class="form-control">
                                                <textarea name="policy_terms" id="editor13"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Disclaimer</label>
                                                <input type="text" name="heading_disclaimer" placeholder="Add Heading" class="form-control">
                                                <textarea name="disclaimer" id="editor14"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">City</label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">State</label>
                                            <input type="text" name="state" class="form-control">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Near by</label>
                                            <input type="text" name="near_by" class="form-control">
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <label for="">Full address</label>
                                            <input type="text" name="full_address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta Title</label>
                                                <textarea name="meta_title" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta keyword</label>
                                                <textarea name="meta_keyword" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta Description</label>
                                                <textarea name="meta_description" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Upload Images</label>
                                                <input type="file" multiple name="image[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                                    <div class="row">
                                        {{-- <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Original Price</label>
                                                <input type="text" name="origial_price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">selling Price</label>
                                                <input type="text" name="selling_price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input type="text" name="quantity" class="form-control">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Select Color</label><br/>
                                                <div class="row">
                                                    @forelse ($colors as $coloritem)
                                                    <div class="col-md-2">
                                                        <div class="border p-2 mb-4">
                                                         Color <input type="checkbox" name="colors[{{ $coloritem->id }}]" value="{{ $coloritem->id }}"> {{ $coloritem->name }}
                                                            <br>
                                                        Quantity <input type="number" name="colorquantity[{{ $coloritem->id }}] " style="width: 70px;">
                                                        </div>
                                                    </div>
                                                    
                                                @empty
                                                    <h4>
                                                        No color found
                                                    </h4>
                                                @endforelse
                                                </div>
                                               
                                            </div>
                                        </div>  --}}
                                        {{-- <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Trending</label>
                                                <input type="checkbox" name="trending" style="width: 20px;height:20px;">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="h4">
                                                Hotel Type
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">all</label>
                                              <input type="checkbox" name="all" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">hotels</label>
                                              <input type="checkbox" name="hotels" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">resorts</label>
                                              <input type="checkbox" name="resorts" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">restaurants</label>
                                              <input type="checkbox" name="restaurants" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                              <label for="">bars nightclubs</label>
                                              <input type="checkbox" name="bars_nightclubs" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">conference centers</label>
                                              <input type="checkbox" name="conference_centers" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">theaters</label>
                                              <input type="checkbox" name="theaters" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-lg-12">
                                            <div class="h4">
                                                Category
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">corporate party</label>
                                              <input type="checkbox" name="corporate_party" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding ceremony</label>
                                              <input type="checkbox" name="wedding_ceremony" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding anniversary</label>
                                              <input type="checkbox" name="wedding_anniversary" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">birthday party</label>
                                              <input type="checkbox" name="birthday_party" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">engagement ceremony</label>
                                              <input type="checkbox" name="engagement_ceremony" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding reception</label>
                                              <input type="checkbox" name="wedding_reception" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">birthday party for kids</label>
                                              <input type="checkbox" name="birthday_party_for_kids" style="widtth:20px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">corporate training</label>
                                                <input type="checkbox" name="corporate_training" style="widtth:20px;">
                                            </div>
                                       </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <input type="checkbox" name="status" style="width: 20px;height:20px;"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-dark col-md-4">Submit</button>
                            </div>
                        </form> 
                    </div>
                </div>
            {{-- End  --}}
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
            @push('script')
                <script>
                    window.addEventListener('close-modal', event =>{
                        $('#AddBrandModal').model('hide');
                    })
                </script>
            @endpush
            @endsection