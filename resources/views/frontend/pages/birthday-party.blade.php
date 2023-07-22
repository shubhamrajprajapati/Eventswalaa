@extends('layouts.frontend')
@section('title')Eventswalaa - Venue near me @endsection
@section('keywords')Eventswalaa - Venue near me @endsection
@section('description')Eventswalaa - Venue near me @endsection

@section('content')
    <style>
        svg {
            width: 18px;
        }

        nav .justify-between:first-child {
            display: none !important;
        }

        .pr-4,
        .px-4 {
            padding-right: 0.5rem !important;
        }

        .pl-4,
        .px-4 {
            padding-left: 0.5rem !important;
        }

        @media(min-width:300px) and (max-width: 800px) {

            .pr-4,
            .px-4 {
                padding-right: 0.1rem !important;
            }

            .pl-4,
            .px-4 {
                padding-left: 0.1rem !important;
            }
        }
    </style>
    <section class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="h-0 text-center mt-5 mb-4" style="text-shadow: 2px 2px #FF0000;">
                        Find & Book the Best Venue for Your Special Event ss
                    </div>
                </div>
                <div class="col-lg-12">
                    <form action="{{ url('search') }}" id="search-form" method="GET" role="search">
                        @csrf
                        <div class="row justify-content-center">
                            {{-- <div class="col-md-3 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    @foreach ($searchcategories as $categoryitem)
                                    <option value="{{ $categoryitem->id }}">
                                        {{ $categoryitem->name }}
                                    </option>
                                    @endforeach
                                </select>
                        </div> --}}
                            <div class="col-md-4 p-0">
                                <input type="search" name="city" value="{{ Request::get('city') }}"
                                    class="form-control search-slt"
                                    placeholder="Enter local address - City - Venue Name or Other">
                            </div>
                            <div class="col-md-3 p-0">
                                <button type="submit" class="btn btn-primary wrn-btn">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 mt-4">
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">{{ session('message') }}</h4>
                            <p>Call us now:- +91 - 88829 76880</p>
                            <hr>
                            <p class="mb-0">Email:- inquiry@eventswalaa.com</p>
                        </div>
                        {{-- <script>alert("{{ session('message') }}")</script> --}}
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="h6 mt-4 mb-4">
                        <a href="{{ url('/') }}"> Home /</a>
                        <a class="text-decoration-none " href="{{ url('/venue') }}">
                            <span class="text-danger">Venue </span> <span class="text-dark"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="h6">
                                Event Type
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=uIBhs8pC1a8BvyL9CTWPc1PfHFoMIr48kr2HukL2&search=All') }}">All
                                </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=&search=Hotels') }}">Hotels
                                </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=Resorts') }}">Resorts
                                </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=Restaurants') }}">Restaurants
                                </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=Bars+and+nightclubs') }}">Bars
                                    and nightclubs </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=Conference+centers') }}">Conference
                                    centers </a>
                            </div>
                            <div class="my-2">
                                <a class="text-dark"
                                    href="{{ url('/search?_token=YFjP4WRWg8VO2q9onx6CmKWRBaU5i7bReNKXE1uH&search=Theaters') }}">Theaters
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="h6">
                                Filter by priceprice
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-2">
                                <label for="d-block">
                                    <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" />
                                    High to low
                                </label>
                                <p>
                                    <label for="d-block">
                                        <input type="radio" name="priceSort" wire:model="priceInput"
                                            value="low-to-high" /> Low to high
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        @foreach ($allFilter as $productItem)
                            <div class=" mb-5">
                                <div class="shadow">
                                    <div class="product-card h-100">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{ url('/venue/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                                                    class="text-black text-decoration-none" target="_blank">
                                                    @if ($productItem->productImages->count() > 0)
                                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                            alt=" {{ $productItem->name }}"
                                                            class="mx-auto d-block img-fluid p-2 w-100"
                                                            style="height: 150px;">
                                                    @else
                                                        <img src="{{ asset('assets/images/no-images.png') }}"
                                                            alt=" {{ $productItem->name }}"
                                                            class="mx-auto d-block img-fluid p-2">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ url('/venue/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                                                    class="text-dark text-decoration-none" target="_blank">
                                                    <div class="h5 gradient-h5  py-2 ">
                                                        {{ $productItem->name }}
                                                    </div>
                                                    <div class="px-2">
                                                        <div class="product-des property-group">
                                                            <p>
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                {{ $productItem->full_address }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-light h-100 ">
                                                    <div class="col-lg-12">
                                                        <div class="pt-2 pb-2">
                                                            @if (!empty($productItem->veg_sell_price_one))
                                                                <span class="fa-stack other_food">
                                                                    <i
                                                                        class="fa fa-square-o fa-stack-2x yellow-symbol"></i>
                                                                    <i class="fa fa-circle fa-stack-1x yellow-sym"></i>
                                                                </span>
                                                                <font class="other_price">Veg : <i class="fa fa-inr"
                                                                        aria-hidden="true"></i></font>
                                                                {{ $productItem->veg_sell_price_one }} -
                                                                {{ $productItem->vegprice_one }}
                                                            @endif

                                                            <br>
                                                            @if ($productItem->non_sell_price_one)
                                                                <span class="fa-stack other_food">
                                                                    <i class="fa fa-square-o fa-stack-2x red-symbol"></i>
                                                                    <i class="fa fa-circle fa-stack-1x red-sym"></i>
                                                                </span>
                                                                <font class="other_price">NonVeg : <i class="fa fa-inr"
                                                                        aria-hidden="true"></i></font>
                                                                {{ $productItem->non_sell_price_one }} -
                                                                {{ $productItem->nonprice_one }}
                                                            @endif

                                                        </div>

                                                        @if (!empty($productItem->space_capacity))
                                                            <div class="mb-2">
                                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                                Capacity:
                                                                @php
                                                                    echo $productItem->space_capacity;
                                                                @endphp
                                                            </div>
                                                        @endif

                                                    </div>

                                                    <p class="text-center">
                                                        <button type="button" id="dam_return"
                                                            value="{{ $productItem->name }}-{{ $productItem->full_address }}"
                                                            class="btn btn-primary" data-toggle="modal"
                                                            data-target="#inqueryModal">
                                                            <div style="display: none">
                                                                {{ $productItem->name }}-{{ $productItem->full_address }}"
                                                            </div> Request to Book
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-12">
                            <div class="mb-4">
                                {{ $allFilter->appends(request()->input())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('scripts')
    <script>
        // $('#GFG_UP').text("Click on button to get ID");

        // $("button").click(function() {
        //     var t = $(this).attr('id');
        //     $('#GFG_DOWN').text("ID = " + t);
        // }); 

        // $('#venue_address').on('click', function() {
        //     var phone = $('#venue_address').val();
        //     console.log(phone);
        // });
        buttonSet.addEventListener('click', () => {
            getInput.value = setInput.value;
        });

        $(document).ready(function() {
            $("#dam_return").click(function() {
                var value = $(this).html();
                var input = $('#venue_address');
                input.val(value);
            });
        });
    </script>
@endsection
{{-- Model start --}}
<!-- Button trigger modal -->
{{-- 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Launch demo modal
</button> 
--}}
<!-- Modal -->
<div class="modal fade " id="inqueryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <div class="h6 mb-4">
                        Check availability &amp; price
                    </div>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    <div class="card box-shadow border-none ">
                        <div class="card-body border-none">
                            <div class="span4 collapse-group">
                                <form action="{{ route('contact-form.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group" required>
                                                <select name="occasion_type" id="" class="form-control"
                                                    required>
                                                    <option value=""> Select Your Event</option>
                                                    <option value="Wedding Ceremony"> Wedding Ceremony</option>
                                                    <option value="Wedding Reception"> Wedding Reception</option>
                                                    <option value="Engagement Ceremony"> Engagement Ceremony</option>
                                                    <option value="Wedding Anniversary"> Wedding Anniversary</option>
                                                    <option value="Birthday Party"> Birthday Party </option>
                                                    <option value="Birthday Party for Kids"> Birthday Party for Kids
                                                    </option>
                                                    <option value="Corporate party">Corporate party</option>
                                                    <option value="Corporate Training"> Corporate Training </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="date" name="date" id=""
                                                    placeholder="Select Occasion Date *" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="venue_address" id="venue_address"
                                                    class="form-control" placeholder="Enter your address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" name="no_guests" class="form-control"
                                                    placeholder="No Of guests *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select name="budget_range" class="form-control" required>
                                                    <option value="">Select Budget Range</option>
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
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter your name *" id="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="number" name="mobile" class="form-control"
                                                    placeholder="Enter your mobile *" id="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter your email" id="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="notes" placeholder="Notes" class="form-control" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-md col-md-12">Check
                                                    availability</button>
                                            </div>
                                        </div>
                                    </div> {{-- Row --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

{{-- End Model --}}
