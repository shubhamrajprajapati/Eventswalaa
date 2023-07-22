@extends('layouts.frontend')
@section('title')
    Events walaa
@endsection
@section('keywords')
    Events walaa
@endsection
@section('description')
    Events walaa
@endsection
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

        <style>.owl-item {
            height: 100%;
        }

        .ui-widget {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .ui-widget {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            height: 200px;
            overflow-y: scroll;
        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .ui-widget:hover .dropdown-content {
            display: block;
        }

        .dropdoui-widgetwn:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    <section class="">
        <div class="container pb-4">
            <div class="row mt-4 justify-content-center">
                <div class="col-sm-12 mt-5 ">
                    <div class="h-0 text-center mt-5 mb-4 text-white" style="text-shadow: 2px 2px #FF0000;">
                        Find & Book the Best Venue for Your Special Event
                    </div>
                </div>
            </div>
            <form action="{{ url('search') }}" id="search-form" method="GET" role="search">
                @csrf
                <div class="row justify-content-center">
                    {{-- <div class="col-md-3 p-0">
                        <select class="form-control search-slt" id="exampleFormControlSelect1">
                            @foreach ($categories as $categoryitem)
                            <option value="{{ $categoryitem->id }}">
                                {{ $categoryitem->name }}
                            </option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="col-md-4 mb-2  p-0 ui-widget">
                        <input type="search" name="city" id="dam" value="{{ Request::get('city') }}"
                            class="form-control search-slt" placeholder="Enter City" autocomplete="off">
                        <div id="dam_return" class="h-350 bg-white" onclick="myFunction()">
                            <div class=" pl-5 dropdown-content" id="myDIV" style="width:100%;">
                                <div style="width:45%;float: left;">
                                    <div class="h6 text-dark"><strong>Delhi NCR</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Delhi</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Faridabad</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Ghaziabad</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Greater Noida</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Gurgaon</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Noida</a></div>
                                    <div class="h6 text-dark"><strong>Uttar Pradesh</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Agra</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Aligarh</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Allahabad</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Bareilly</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Bulandshahr</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Kanpur</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Lucknow</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Mathura</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Meerut</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Varanasi</a></div>
                                    <div class="h6 text-dark"><strong>Bihar</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Patna</a></div>

                                </div>
                                <div style="width:45%;float: left;">
                                    <div class="h6 text-dark"><strong>Maharashtra</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Lonavala</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Mumbai</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Nagpur</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Nashik</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Pune</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Shirdi</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Thane</a></div>
                                    <div class="h6 text-dark"><strong>Rajasthan</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Ajmer</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Alwar</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Bikaner</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Jaipur</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Jaisalmer</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Jodhpur</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Mount Abu</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Pushkar</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Ranthambore</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Udaipur</a></div>
                                    <div class="h6 text-dark"><strong>Gujarat</strong></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Ahmedabad</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Surat</a></div>
                                    <div><a class="text-dark" href="javascript:void(0);">Vadodara</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-3 p-0">
                        <input type="search" name="city" value="{{ Request::get('search')}}" class="form-control search-slt"  placeholder="Enter local address - City - Venue Name or Other">
                    </div> --}}
                    <div class="col-md-3 mb-2  p-0 ui-widget">
                        <input type="search" name="near_by" id="tags" value="{{ Request::get('near_by') }}"
                            class="form-control search-slt" placeholder="Enter Neawer by">
                    </div>
                    <div class="col-md-2 p-0">
                        <button type="submit" class="btn btn-primary wrn-btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="my-1">
                        <div class="h4 mb-4">
                            Search Results
                        </div>
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
                    {{-- <div class="card">
            <div class="card-header">
                <div class="h6">
                    Filter by city
                </div>
            </div>
            <div class="card-body">
                @foreach ($products as $cityItem)
                    <div class="d-block">
                        <input type="checkbox"> {{ $cityItem->city}}
                    </div>
                @endforeach
            </div>
        </div>
           @if ($category->brands)
        <div class="card mt-4">
            <div class="card-header">
                <div class="h6">
                    Filter Your Search
                </div>
            </div>
            <div class="card-body">
                <div class="mt-2">
                    @foreach ($category->brands as $brandItem)
                       <div class="row">
                            <div class="col-lg-12">
                                <label for="d-block">
                                    <input type="checkbox" wire:model="brandInputs" value="{{$brandItem->name}}" /> {{$brandItem->name}} 
                                </label>
                            </div>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif --}}
                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="h6">
                                Filter by price
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mt-2">
                                <label for="d-block">
                                    <input type="radio" name="priceSort" wire:model="priceInput"
                                        value="high-to-low" /> High to low
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
                    <div class="row justify-content-center">
                        <div class="col-lg-12 pb-4">
                            {{ $searchProducts->appends(request()->input())->links() }}
                        </div>
                    </div>
                    <div class="row">

                        @forelse ($searchProducts as $productItem)
                            <div class=" mb-5">
                                <div class="shadow">
                                    <div class="product-card h-100">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{ url('/venue/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                                                    class="text-black text-decoration-none" target="_blank">
                                                    @if ($productItem->productImages->count() > 0)
                                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                            alt="Hotel" class="mx-auto d-block img-fluid p-2 w-100"
                                                            style="height: 150px;">
                                                    @else
                                                        <img src="{{ asset('assets/images/no-images.png') }}"
                                                            alt="Hotel" class="mx-auto d-block img-fluid p-2 w-100"
                                                            style="height: 150px;">
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
                                                                Capacity
                                                                @php
                                                                    echo $productItem->space_capacity;
                                                                @endphp
                                                            </div>
                                                        @endif

                                                    </div>
                                                    <p class="text-center">
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#inqueryModal">
                                                            Request to Book
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4 class="mt-4">Coming Soon. We are not operating here for now. <a
                                    href="{{ url('/') }}">Go Back</a></h4>
                        @endforelse

                    </div>
                    <div class="col-lg-12">
                        {{ $searchProducts->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
    </section>
@endsection
@include('layouts.model')
