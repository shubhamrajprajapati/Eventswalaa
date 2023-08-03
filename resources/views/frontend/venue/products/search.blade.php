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

    @php
        function insertHiddenField($key)
        {
            $value = Request::get($key) ?? '';
            if ($value != '') {
                $value = Request::get($key);
                echo "<input type='hidden' id='$key' name='$key' value='$value'>";
            } else {
                echo null;
            }
        }
    @endphp

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

                {{ insertHiddenField('_token') }}
                {{ insertHiddenField('event') }}
                <div class="row justify-content-center">

                    <div class="col-md-4 mb-2  p-0 ui-widget">


                        <input type="search" name="city" id="dam" value="{{ Request::get('city') }}"
                            class="form-control search-slt" placeholder="Enter City" autocomplete="off">
                        <x-frontend.city-dropdown-list />
                    </div>
                    {{ insertHiddenField('hotel') }}

                    <div class="col-md-3 mb-2  p-0 ui-widget">
                        <input type="search" name="near_by" id="near_by" value="{{ Request::get('near_by') }}"
                            class="form-control search-slt" placeholder="Near by">
                    </div>
                    {{ insertHiddenField('type') }}
                    {{ insertHiddenField('hotels') }}
                    {{ insertHiddenField('resorts') }}
                    {{ insertHiddenField('restaurants') }}
                    {{ insertHiddenField('bars_nightclubs') }}
                    {{ insertHiddenField('conference_centers') }}
                    {{ insertHiddenField('theaters') }}

                    {{ insertHiddenField('price') }}
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
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="h6">
                                Filter by Event and Hotel Name
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="get" class="mb-0">
                                {{ insertHiddenField('_token') }}
                                <div class="mb-2">
                                    <select class="form-control search-slt" id="event" name="event" required>
                                        <option value="">Select your event type </option>
                                        @foreach ($categories as $categoryitem)
                                            <option value="{{ $categoryitem->name }}"
                                                {{ $categoryitem->name == Request::get('event') ? 'selected' : '' }}>
                                                {{ $categoryitem->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ insertHiddenField('city') }}
                                {{ insertHiddenField('near_by') }}
                                <div class="mt-2">
                                    <input type="search" name="hotel" id="hotel" value="{{ Request::get('hotel') }}"
                                        class="form-control search-slt" placeholder="Enter hotel name">
                                </div>

                                {{ insertHiddenField('type') }}
                                {{ insertHiddenField('hotels') }}
                                {{ insertHiddenField('resorts') }}
                                {{ insertHiddenField('restaurants') }}
                                {{ insertHiddenField('bars_nightclubs') }}
                                {{ insertHiddenField('conference_centers') }}
                                {{ insertHiddenField('theaters') }}

                                {{ insertHiddenField('price') }}

                                <button type="submit" class="btn btn-primary btn-sm mt-3 btn-block">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="h6">
                                Filter By Type
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="get" class="mb-0">
                                {{ insertHiddenField('_token') }}
                                {{ insertHiddenField('event') }}
                                {{ insertHiddenField('city') }}
                                {{ insertHiddenField('near_by') }}
                                {{ insertHiddenField('hotel') }}

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="type" value="all"
                                        id="type" {{ Request::get('type') == 'all' ? 'checked' : '' }}
                                        onchange="selectAllEventType(this, 'eventType');">
                                    <label class="form-check-label" for="type">
                                        All
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="hotels" value="hotels"
                                        id="hotels" {{ Request::get('hotels') == 'hotels' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="hotels">
                                        Hotels
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="resorts" value="resorts"
                                        id="resorts" {{ Request::get('resorts') == 'resorts' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="resorts">
                                        Resorts
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="restaurants"
                                        value="restaurants" id="restaurants"
                                        {{ Request::get('restaurants') == 'restaurants' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="restaurants">
                                        Restaurants
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="bars_nightclubs"
                                        value="bars_nightclubs" id="bars_nightclubs"
                                        {{ Request::get('bars_nightclubs') == 'bars_nightclubs' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="bars_nightclubs">
                                        Bars and Nightclubs
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="conference_centers"
                                        value="conference_centers" id="conference_centers"
                                        {{ Request::get('conference_centers') == 'conference_centers' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="conference_centers">
                                        Conference Centers
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input eventType" type="checkbox" name="theaters"
                                        value="theaters" id="theaters"
                                        {{ Request::get('theaters') == 'theaters' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="theaters">
                                        Theaters
                                    </label>
                                </div>

                                {{ insertHiddenField('price') }}

                                <button class="btn btn-primary btn-sm mt-3 btn-block">Submit</button>

                            </form>

                            <script>
                                const selectAllEventType = (source, className) => {
                                    checkboxes = document.getElementsByClassName(className);
                                    for (var i = 0, n = checkboxes.length; i < n; i++) {
                                        checkboxes[i].checked = source.checked;
                                    }
                                }
                            </script>
                        </div>
                    </div>

                    <div class="card my-4">
                        <div class="card-header">
                            <div class="h6">
                                Filter by price
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="get" class="mb-0">
                                {{ insertHiddenField('_token') }}
                                {{ insertHiddenField('event') }}
                                {{ insertHiddenField('city') }}
                                {{ insertHiddenField('near_by') }}
                                {{ insertHiddenField('hotel') }}

                                {{ insertHiddenField('type') }}
                                {{ insertHiddenField('hotels') }}
                                {{ insertHiddenField('resorts') }}
                                {{ insertHiddenField('restaurants') }}
                                {{ insertHiddenField('bars_nightclubs') }}
                                {{ insertHiddenField('conference_centers') }}
                                {{ insertHiddenField('theaters') }}

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="low-to-high"
                                        value="low-to-high" {{ Request::get('price') == 'low-to-high' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="low-to-high">
                                        Low to High
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="price" id="high-to-low"
                                        value="high-to-low" {{ Request::get('price') == 'high-to-low' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="high-to-low">
                                        High to Low
                                    </label>
                                </div>
                                <div class="btn-group mt-3 w-100">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="resetPriceInput();">Reset</button>
                                </div>

                            </form>

                            <script>
                                const resetPriceInput = () => {
                                    var ele = document.getElementsByName("price");
                                    for (var i = 0; i < ele.length; i++)
                                        ele[i].checked = false;
                                }
                            </script>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row justify-content-center pb-2">
                        <div class="col-lg-4 px-0">
                            <h4>Search Results ({{ $totalResults }})</h4>
                        </div>
                        <div class="col-lg-8 pb-2 text-right">
                            {{ $searchProducts->appends(request()->input())->links() }}
                        </div>
                    </div>

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

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
                                                            data-toggle="modal" data-target="#inqueryModal"
                                                            data-event="{{ Request::get('event') }}"
                                                            data-product-id="{{ $productItem->id }}"
                                                            data-product-url="{{ url('/venue/' . $productItem->category->slug . '/' . $productItem->slug) }}"
                                                            data-product-name="{{ $productItem->name }}"
                                                            data-product-address="{{ $productItem->full_address }}">
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
