@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0"> Edit Hotel</div>
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
                        <form action="{{ url('admin/products/'.$product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                                <select class="form-control" name="category_id" style="width: 100%; height: 38px">
                                                    @foreach ($categories as $category )
                                                        <option value="{{ $category->id }}" {{$category->id == $product->category_id ? 'selected' : '' }}> 
                                                            {{ $category->name }}  
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Name</label>
                                                <input type="text" name="name" 
                                                value="{{ $product->name }}" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Slug</label>
                                                <input type="text" name="slug" 
                                                value="{{ $product->slug }}" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Select Brand</label>
                                                <select class="custom-select2 form-control" name="brand" style="width: 100%; height: 38px">
                                                    @foreach ($brands as $brand )
                                                        <option value="{{ $brand->name }}" {{ $brand->name == $product->brand ? 'selected': ''}}>
                                                             {{ $brand->name }} 
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Owner phone No</label>
                                                <input type="text" name="hotel_phone" value="{{ $product->hotel_phone }}"  class="form-control" placeholder="Hotel Owner phone No">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Hotel Type</label>
                                                <select class="custom-select2 form-control" name="hotel_type" style="width: 100%; height: 38px">
                                                    <option value="{{ $product->hotel_type }}" selected>{{ $product->hotel_type }}</option>
                                                    <option value="All">All </option>
                                                    <option value="Hotels"> Hotels </option>
                                                    <option value="Resorts"> Resorts </option>
                                                    <option value="Restaurants"> Restaurants </option>
                                                    <option value="Bars and nightclubs"> Bars and nightclubs </option>
                                                    <option value="Conference centers"> Conference centers </option>
                                                    <option value="Theaters"> Theaters </option>
                                                </select>
                                                {{-- <input type="text" name="hotel_type" value="{{ $product->hotel_type }}" class="form-control" placeholder="Hotel Type"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Hotel Description Or About Us</label>
                                                {{-- <input type="text" name="heading_description" value="{{ $product->heading_description}}" placeholder="Add Heading" class="form-control"> --}}
                                                <textarea name="description" id="editor" >{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for=""> All Party / Event Spaces</label>
                                                    <input type="text" name="all_party" class="form-control"
                                                    value="{{ $product->all_party }}" >
                                                </div>
                                           </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_one" class="form-control" 
                                                    value="{{ $product->hall_one }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_one" class="form-control" 
                                                    value="{{ $product->mincapacity_one }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_one" class="form-control" 
                                                    value="{{ $product->maxcapacity_one }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_one" class="form-control" placeholder="Original Price" 
                                                    
                                                    value="{{ $product->vegprice_one }}" >
                                                    <input type="text" name="veg_sell_price_one" class="form-control" placeholder="Selling Price"  
                                                    
                                                    value="{{ $product->veg_sell_price_one }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_one" class="form-control" placeholder="Original Price" 
                                                    
                                                    value="{{ $product->nonprice_one }}" >
                                                    <input type="text" name="non_sell_price_one" class="form-control" placeholder="Selling Price"  
                                                    
                                                    value="{{ $product->non_sell_price_one }}" >
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_two" class="form-control"  
                                                    
                                                    value="{{ $product->hall_two }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_two" class="form-control"  
                                                    
                                                    value="{{ $product->mincapacity_two }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_two" class="form-control"  
                                                    
                                                    value="{{ $product->maxcapacity_two }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price veg</label>
                                                    <input type="text" name="vegprice_two" class="form-control" placeholder="Original Price" 
                                                    
                                                    value="{{ $product->vegprice_two }}" >
                                                    <input type="text" name="veg_sell_price_two" class="form-control" placeholder="Selling Price" 
                                                    
                                                    value="{{ $product->veg_sell_price_two }} ">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non veg</label>
                                                    <input type="text" name="nonprice_two" class="form-control" placeholder="Original Price" 
                                                    
                                                    value="{{ $product->nonprice_two }}" >
                                                    <input type="text" name="non_sell_price_two" class="form-control" placeholder="Selling Price" 
                                                    
                                                    value="{{ $product->non_sell_price_two }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_three" class="form-control"  
                                                    value="{{ $product->hall_three }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_three" class="form-control"  
                                                    value="{{ $product->mincapacity_three }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_three" class="form-control"  
                                                    value="{{ $product->maxcapacity_three }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_three" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->vegprice_three }}" >
                                                    <input type="text" name="veg_sell_price_three" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->veg_sell_price_three }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Price non Veg</label>
                                                    <input type="text" name="nonprice_three" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->nonprice_three }}" >
                                                    <input type="text" name="non_sell_price_three" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->non_sell_price_three }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_four" class="form-control"  
                                                    value="{{ $product->hall_four }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_four" class="form-control"  
                                                    
                                                    value="{{ $product->mincapacity_four }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_four" class="form-control"  
                                                    
                                                    value="{{ $product->maxcapacity_four }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_four" class="form-control" placeholder="Original Price" 
                                                    
                                                    value="{{ $product->vegprice_four }}" >
                                                    <input type="text" name="veg_sell_price_four" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->veg_sell_price_four }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Non price veg</label>
                                                    <input type="text" name="nonprice_four" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->nonprice_four }}" >
                                                    <input type="text" name="non_sell_price_four" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->non_sell_price_four }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_five" class="form-control"  
                                                    value="{{ $product->hall_five }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_five" class="form-control"  
                                                    value="{{ $product->mincapacity_five }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_five" class="form-control"  
                                                    value="{{ $product->maxcapacity_five }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_five" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->vegprice_five }}" >
                                                    <input type="text" name="veg_sell_price_five" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->veg_sell_price_five }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">price non Veg</label>
                                                    <input type="text" name="nonprice_five" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->nonprice_five }}" >
                                                    <input type="text" name="non_sell_price_five" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->non_sell_price_five }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_six" class="form-control"  
                                                    value="{{ $product->hall_six }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_six" class="form-control"  
                                                    value="{{ $product->mincapacity_six }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_six" class="form-control"  
                                                    value="{{ $product->maxcapacity_six }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_six" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->vegprice_six }}" >
                                                    <input type="text" name="veg_sell_price_six" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->veg_sell_price_six }}">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="nonprice_six" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->nonprice_six }}" >
                                                    <input type="text" name="non_sell_price_six" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->non_sell_price_six }}">
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- End hall --}}
                                        {{-- hall --}}
                                        <div class="row px-4">
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Space Name</label>
                                                    <input type="text" name="hall_seven" class="form-control"  
                                                    value="{{ $product->hall_seven }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Min Capacity</label>
                                                    <input type="text" name="mincapacity_seven" class="form-control"  
                                                    value="{{ $product->mincapacity_seven }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Max Capacity</label>
                                                    <input type="text" name="maxcapacity_seven" class="form-control"  
                                                    value="{{ $product->maxcapacity_seven }}" >
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="vegprice_seven" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->vegprice_seven }}" >
                                                    <input type="text" name="veg_sell_price_seven" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->veg_sell_price_seven }} ">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Food price Veg</label>
                                                    <input type="text" name="nonprice_seven" class="form-control" placeholder="Original Price" 
                                                    value="{{ $product->nonprice_seven }}" >
                                                    <input type="text" name="non_sell_price_seven" class="form-control" placeholder="Selling Price" 
                                                    value="{{ $product->non_sell_price_seven }} ">
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- End hall --}}

                                        <div class="form-group col-lg-12">
                                            <label for="">Space Capacity</label>
                                            <input type="text" name="space_capacity" class="form-control"  
                                            value="{{ $product->space_capacity }}" >
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-otherdetails" role="tabpanel" aria-labelledby="nav-otherdetails-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Good For Occasions</label>
                                                <input type="text" name="heading_occasions" value="{{ $others_details->heading_occasions }}" placeholder="Add Heading" class="form-control">
                                                <textarea name="good_for_occasions" id="editor1">{{ $others_details->good_for_occasions }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Operating time</label>
                                            <input type="text" name="operating_time" class="form-control"  
                                            value="{{ $others_details->operating_time }}" >
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Cuisines Served</label>
                                                <input type="text" name="heading_cuisines" value="{{ $others_details->heading_cuisines}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="cuisines_served" id="editor2">{{ $others_details->cuisines_served }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Facilities</label>
                                                <input type="text" name="heading_facilities" value="{{ $others_details->heading_facilities}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="facilities" id="editor3">{{ $others_details->facilities }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Space Type</label>
                                                <input type="text" name="heading_space" value="{{ $others_details->heading_space}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="space_type" id="editor4">{{ $others_details->space_type }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Car Parking</label>
                                                <input type="text" name="heading_parking" value="{{ $others_details->heading_parking}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="car_parking" id="editor5">{{ $others_details->car_parking }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">More Information</label>
                                                <input type="text" name="heading_information" value="{{ $others_details->heading_information}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="more_information" id="editor6">{{ $others_details->more_information }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">USPS power</label>
                                                <input type="text" name="heading_usps" value="{{ $others_details->heading_usps}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="usps_power" id="editor7">{{ $others_details->usps_power }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Room Details</label>
                                                <input type="text" name="heading_room" value="{{ $others_details->heading_room}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="room_details" id="editor8">{{ $others_details->room_details }}</textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Welcom Hotel</label>
                                                <input type="text" name="heading_welcome" value="{{ $product->heading_welcome}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="welcom_hotel" id="editor9">{{ $product->welcom_hotel }}</textarea>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Service policy</label>
                                                <input type="text" name="heading_policy" value="{{ $product->heading_policy}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="service_policy" id="editor10">{{ $product->service_policy }}</textarea>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Summary event space</label>
                                                <input type="text" name="heading_summary" value="{{ $others_details->heading_summary}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="summary_event_space" id="editor11">{{ $others_details->summary_event_space }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Nearest Landmark</label>
                                                <input type="text" name="heading_landmark" value="{{ $others_details->heading_landmark}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="nearest_landmark" id="editor12">{{ $others_details->nearest_landmark }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Policy terms</label>
                                                <input type="text" name="heading_terms" value="{{ $others_details->heading_terms}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="policy_terms" id="editor13">{{ $others_details->policy_terms }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Disclaimer</label>
                                                <input type="text" name="heading_disclaimer" value="{{ $others_details->heading_disclaimer}}" placeholder="Add Heading" class="form-control">
                                                <textarea name="disclaimer" id="editor14">{{ $others_details->disclaimer }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">City</label>
                                            <input type="text" name="city" class="form-control" 
                                            value="{{ $product->city }}" >
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">State</label>
                                            <input type="text" name="state" 
                                            value="{{ $product->state }}" class="form-control">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Near by</label>
                                            <input type="text" name="near_by" value="{{ $product->near_by }}" class="form-control">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="">Full address</label>
                                            <input type="text" name="full_address" 
                                            value="{{ $product->full_address }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta Title</label>
                                                <textarea name="meta_title" id="" cols="30" rows="10" class="form-control">{{ $product->meta_title }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta keyword</label>
                                                <textarea name="meta_keyword" id="" cols="30" rows="10" class="form-control">{{ $product->meta_keyword }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Meta Description</label>
                                                <textarea name="meta_description" id="" cols="30" rows="10" class="form-control">{{ $product->meta_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Upload Images</label>
                                                <input type="file" multiple name="image[]" class="form-control">
                                            </div>
                                        </div>
                                        @foreach ($product->productImages as $image)
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <img src="{{ asset($image->image) }}" class="border " style="height:80px;width:100px" alt="image">
                                                    <a href="{{ url('admin/product-image/'.$image->id.'/delete')}}">Remove</a>
                                                </div>
                                            </div>
                                        @endforeach

                                                {{-- @if ($product->productImages)
                                                    @foreach ($product->productImages as $image)
                                                        <img src="{{ asset($image->image) }}" class="border " style="height:80px;width:80px" alt="image">
                                                    @endforeach
                                                @else
                                                    <h5>No Images Added</h5>
                                                @endif --}}

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                                    <div class="row">
                                        {{-- <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Original Price</label>
                                                <input type="text" name="origial_price" class="form-control" 
                                                value="{{ $product->origial_price }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">selling Price</label>
                                                <input type="text" name="selling_price" class="form-control" 
                                                value="{{ $product->selling_price }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Quantity</label>
                                                <input type="text" name="quantity" class="form-control" 
                                                value="{{ $product->quantity }}">
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
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tHead>
                                                        <tr>
                                                            <th>Color Name</th>
                                                            <th>Quantity</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </tHead>
                                                    <tbody>
                                                        @foreach ($product->productColors as $prodColor)
                                                        <tr class="prod-color-tr">
                                                            <td>
                                                                @if ($prodColor->color)
                                                                    {{ $prodColor->color->name }}
                                                                @else
                                                                    <h4>No color found</h4>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ $prodColor->quantity }}" class="productColorQuantity form-control-sm">
                                                                    <button type="button" value="{{ $prodColor->id }}" class="updateProductColorBtn btn btn-sm btn-primary mt-1"> Update </button>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" value="{{ $prodColor->id }}" class="deleteProductColorBtn btn btn-sm btn-danger mt-1"> Delete </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>  --}}
                                        <div class="col-lg-12">
                                            <div class="h4">
                                                Hotel Type
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">all</label>
                                              <input type="checkbox" name="all" {{ $product->all == 'all' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">hotels</label>
                                              <input type="checkbox" name="hotels" {{ $product->hotels == 'hotels' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                              <label for="">resorts</label>
                                              <input type="checkbox" name="resorts" {{ $product->resorts == 'resorts' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">restaurants</label>
                                              <input type="checkbox" name="restaurants" {{ $product->restaurants == 'restaurants' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                              <label for="">bars nightclubs</label>
                                              <input type="checkbox" name="bars_nightclubs" {{ $product->bars_nightclubs == 'bars_nightclubs' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">conference centers</label>
                                              <input type="checkbox" name="conference_centers" {{ $product->conference_centers == 'conference_centers' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">theaters</label>
                                              <input type="checkbox" name="theaters" {{ $product->theaters == 'theaters' ? 'checked':''}}>
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
                                              <input type="checkbox" name="corporate_party" {{ $product->corporate_party == 'corporate_party' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding ceremony</label>
                                              <input type="checkbox" name="wedding_ceremony" {{ $product->wedding_ceremony == 'wedding_ceremony' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding anniversary</label>
                                              <input type="checkbox" name="wedding_anniversary" {{ $product->wedding_anniversary == 'wedding_anniversary' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">birthday party</label>
                                              <input type="checkbox" name="birthday_party" {{ $product->birthday_party == 'birthday_party' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">engagement ceremony</label>
                                              <input type="checkbox" name="engagement_ceremony" {{ $product->engagement_ceremony == 'engagement_ceremony' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">wedding reception</label>
                                              <input type="checkbox" name="wedding_reception" {{ $product->wedding_reception == 'wedding_reception' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                              <label for="">birthday party for kids</label>
                                              <input type="checkbox" name="birthday_party_for_kids" {{ $product->birthday_party_for_kids == 'birthday_party_for_kids' ? 'checked':''}}>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">corporate training</label>
                                                <input type="checkbox" name="corporate_training" {{ $product->corporate_training == 'corporate_training' ? 'checked':''}}>
                                            </div>
                                       </div>
 
                                        {{-- <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Trending</label>
                                                <input type="checkbox" name="trending"  {{ $product->trending == '1' ? 'checked':''}} 
                                                style="width: 20px;height:20px;">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked':'' }} 
                                                style="width: 20px;height:20px;"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-dark col-md-4">Update</button>
                            </div>
                        </form> 
                    </div>
                </div>
            {{-- End  --}}
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
            {{-- @push('script')
                <script>
                    window.addEventListener('close-modal', event =>{
                        $('#AddBrandModal').model('hide');
                    })
                </script>
                <script>
                    prod-color-tr
                </script>
            @endpush --}}
@endsection

        @section('scripts')
            <script>
                $(document).ready(function(){

                    // Ajax 
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                    // End Ajax

                    $(document).on('click', '.updateProductColorBtn', function(){
                        var product_id = "{{ $product->id }}";
                        var prod_color_id = $(this).val();
                        var qty = $(this).closest('.prod-color-tr').find('.productColorQuantity').val();
                        // alert(prod_color_id);

                        if (qty <= 0) {
                            alert('Quantity is required')
                            return false; 
                        } 
                        
                        var data = {
                            'product_id':product_id,
                            // 'prod_color_id':prod_color_id,
                            'qty':qty
                        };

                        $.ajax({
                            type: "POST",
                            url: "/admin/product-color/"+prod_color_id,
                            data:data,
                            success: function (response){
                                alert(response.message)
                            }
                        })

                    });

                    $(document).on('click', '.deleteProductColorBtn', function(){
                        var prod_color_id = $(this).val();
                        var thisClick = $(this);

                        $.ajax({
                            type: "GET",
                            url: "/admin/product-color/"+prod_color_id+"/delete",
                            success:function(response){
                                thisClick.closest('.prod-color-tr').remove();
                                alert(response.message);
                            }
                        })

                    });
                    
                });
            </script>
        @endsection