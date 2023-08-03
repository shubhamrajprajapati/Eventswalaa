@extends('layouts.frontend')
@section('title')
    Events walaa - Corporate Events - Birthday Party Places - Wedding Venues - Party places for marriage
@endsection
@section('keywords')
    Events walaa - Corporate Events - Birthday Party Places - Wedding Venues - Party places for marriage
@endsection
@section('description')
    Events walaa - Corporate Events - Birthday Party Places - Wedding Venues - Party places for marriage
@endsection
@section('content')
    <style>
        .owl-item {
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
    <section class="home-banner">
        <div class="container pt-5 pb-4">
            <div class="row mt-4 justify-content-center">
                <div class="col-sm-12 mt-5 ">
                    <div class="h-0 text-center mt-5 mb-4 text-white" style="text-shadow: 2px 2px #FF0000;">
                        Find & Book the Best Venue for Your Special Event
                    </div>
                </div>
            </div>
            <form action="{{ url('search') }}" id="search-form" method="GET" role="search">
                @csrf
                <div class="row justify-content-center p-4">
                    <div class="col-md-3 mb-2  p-0">
                        <select class="form-control search-slt" id="event" name="event" required>
                            <option value="">Select your event type </option>
                            @foreach ($categories as $categoryitem)
                                <option value="{{ $categoryitem->name }}">
                                    {{ $categoryitem->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-2  p-0 ui-widget">
                        <input type="text" name="city" id="dam" value="{{ Request::get('city') }}"
                            class="form-control search-slt" placeholder="Enter City" autocomplete="off">
                        <x-frontend.city-dropdown-list />
                    </div>
                    {{-- <div class="col-md-3 mb-2  p-0 ui-widget">
                        <input type="search" name="city" id="tags" value="{{ Request::get('search')}}" class="form-control search-slt"  placeholder="Enter Neawer by">
                    </div> --}}
                    <div class="col-md-3 mb-2  p-0">
                        <button type="submit" class="btn btn-primary wrn-btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h0 mt-2 text-center custom-font ">
                        Your Event, Your Way
                    </div>
                    <div class="h4 text-center mb-5">
                        Find the best event vendors with thousands of trusted reviews
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('/venue/wedding-ceremony') }}">
                            <div class="what-we-image border-radius text-decoration-none text-dark">
                                <img src="{{ asset('assets/images/wedding-venues.png') }}" class="mx-auto d-block img-fluid"
                                    alt="massage services in Gurgaon, Haryana, India" style="width: 100%;">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Wedding Ceremony
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                            </div> --}}
                        </a>
                    </div>
                </div>
                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('venue/wedding-reception') }}">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/marriage-halls.png') }}" class="mx-auto d-block img-fluid"
                                    alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Wedding Reception
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                                </div> --}}
                        </a>
                    </div>
                </div>
                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('/venue/engagement-ceremony') }}">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/engagement.png') }}" class="mx-auto d-block img-fluid"
                                    alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Engagement Ceremony
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                                </div> --}}
                        </a>
                    </div>
                </div>
                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('/venue/wedding-anniversary') }}">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/engagement-venues.png') }}"
                                    class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Wedding anniversary
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                                </div> --}}
                        </a>
                    </div>
                </div>
                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('/venue/corporate-party') }}">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/corporate-party.png') }}"
                                    class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Corporate party
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                                </div> --}}
                        </a>
                    </div>
                </div>

                <div class=" col-lg-4 col-6 mb-5">
                    <div class="box-shadow h-100">
                        <a class="text-decoration-none text-dark" href="{{ url('/venue/birthday-party') }}">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/birthday.png') }}" class="mx-auto d-block img-fluid"
                                    alt="Massage services in Gurgaon, Haryana, India" style="width: 100%;">
                            </div>
                            <div class="what-we-headeing text-decoration-none text-dark">
                                Birthday party
                            </div>
                            {{-- <div class="what-we-sub-headeing text-decoration-none text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita iste eos, at sequi ipsum perferendis, dignissimos in inventore natus adipisci provident dolorum quam ipsa
                                </div> --}}
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="how-it-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h0 my-4 text-center text-dark-blue custom-font pb-4">
                        How it Works
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/icons/venue.jpg') }}" class="mx-auto d-block img-fluid"
                                alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Discover & Shortlist Venues
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Input your requirements & see our recommendations & prices.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/icons/visits-venue.jpg') }}"
                                class="mx-auto d-block img-fluid" alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Guided Visits
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Visit venues on your own or with our venue expert.
                        </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/icons/book-venue.jpg') }}"
                                class="mx-auto d-block img-fluid" alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Book Venue
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Get final quotes (upto 30% off) and book your venue.
                        </p>


                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/icons/book-vendors.jpg') }}"
                                class="mx-auto d-block img-fluid" alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Book Vendors
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Meet our trusted vendors and book them at your ease.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4 text-center pb-4">
                        <a href="#" data-toggle="modal" data-target="#inqueryModal"
                            class="btn btn-primary btn-lg px-5 col-lg-4">
                            Request to Book
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="mt-5 mb-5">
        <div class="container border-radious1 box-shadow">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h0 pt-4 pb-4 text-center custom-font ">
                        Popular Venue Searches by City
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Amaravati
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Itanagar
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Dispur
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Patna
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Raipur
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Panaji
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Gandhinagar
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Chandigarh
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Shimla
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Ranchi
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Bangalore
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Thiruvananthapuram
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Bhopal
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Mumbai
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Imphal
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Shillong
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Aizawl
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Kohima
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Bhubaneshwar
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Chandigarh
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Jaipur
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Gangtok
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Chennai
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Hyderabad
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Agartala
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Dehradun
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Lucknow
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Kolkata
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Port Blair
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Chandigarh
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Daman
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Delhi
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Srinagar
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Leh
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Kavaratti
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box-shadow h-100">
                        <a href="" class=" text-decoration-none">
                            <div class="what-we-image border-radius">
                                <img src="{{ asset('assets/images/city/delhi.jpg')}}" class="mx-auto d-block img-fluid" alt="Massage services in Gurgaon, Haryana, India">
                            </div>
                            <div class="what-we-headeing text-dark">
                                Puducherry
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <div class="mt-5">.</div> --}}
    <section class="pt-3 pb-3 bg-vendor">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4 mb-4 h4 text-white">
                        Wedding Ceremony
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme ">
                        @foreach ($weddingCeremonyHome as $weddingItem)
                            <div class="item">
                                <div class="h-100">
                                    <a href="{{ url('/venue/' . $weddingItem->category->slug . '/' . $weddingItem->slug) }}"
                                        class="text-black text-decoration-none" target="_blank">
                                        @if ($weddingItem->productImages->count() > 0)
                                            <img src="{{ asset($weddingItem->productImages[0]->image) }}"
                                                alt=" {{ $weddingItem->name }}"
                                                class="mx-auto d-block img-fluid vendor-heading-images"
                                                style="height:150px">
                                        @else
                                            <img src="{{ asset('assets/images/no-images.png') }}"
                                                alt=" {{ $weddingItem->name }}"
                                                class="mx-auto d-block img-fluid vendor-heading-images"
                                                style="height:150px">
                                        @endif
                                        <div class="vendor-title ">{{ $weddingItem->name }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-3 ">
        <div class="container border-radious1 box-shadow pb-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4 mb-4 h4">
                        Birthday Party
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($birthdayPartyHome as $itemBirthday)
                            <div class="item">
                                <div class="h-100">
                                    <a href="{{ url('/venue/' . $itemBirthday->category->slug . '/' . $itemBirthday->slug) }}"
                                        class="text-black text-decoration-none" target="_blank">
                                        @if ($itemBirthday->productImages->count() > 0)
                                            <img src="{{ asset($itemBirthday->productImages[0]->image) }}"
                                                alt=" {{ $itemBirthday->name }}"
                                                class="mx-auto d-block img-fluid vendor-heading-image"
                                                style="height:150px">
                                        @else
                                            <img src="{{ asset('assets/images/no-images.png') }}"
                                                alt="{{ $itemBirthday->name }}"
                                                class="mx-auto d-block img-fluid vendor-heading-image"
                                                style="height:150px">
                                        @endif
                                        <div class="vendor-title">{{ $itemBirthday->name }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 why-venue-book">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="h0 mt-2 custom-font  mb-5 text-white text-center">
                        Why Eventswalaa ?
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/save-money.png') }}" class="mx-auto d-block img-fluid"
                                alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Premium Services
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Lowest Price Guaranteed
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/verified-listing.jpg') }}"
                                class="mx-auto d-block img-fluid" alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Verified Listing
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Dependable & Accurate
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-shadow h-100 default-white P-3">
                        <div class="border-radius">
                            <img src="{{ asset('assets/images/free-booking.jpg') }}" class="mx-auto d-block img-fluid"
                                alt="Events Walaa">
                        </div>
                        <div class="h5 text-center text-dark pt-2 ">
                            Hassle Free Booking
                        </div>
                        <p class="text-center text-dark px-2 ">
                            Convenience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4 text-center pb-4">
                        <a href="#" data-toggle="modal" data-target="#inqueryModal"
                            class="btn btn-primary btn-lg px-5 col-lg-4">
                            Request to Book
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-3 ">
        <div class="container border-radious1 box-shadow pt-4 pb-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="my-4 booking-radius box-shadow ">
                        <img src="{{ asset('assets/images/book-wedding.jpg') }}" class="mx-auto d-block img-fluid"
                            alt="book-wedding">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="mt-5 mb-4 h4">
                        List your venue for free and get more bookings!
                    </div>
                    <p>
                        We are the world’s fastest-growing online marketplace for venue hire, giving you direct access to
                        the right customers.
                    </p>
                    <div class=" mt-4">
                        <a class="btn btn-primary h4 col-lg-12" href="{{ url('list-your-business') }}">List your venue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="h4 my-4">
                        Follow us for more ideas & fun
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-2 col-6">
                    <a href="#" class="instagram py-3">
                        <span>
                            <i class="fa fa-instagram"></i>
                            @venuebook
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 mb-2 col-6">
                    <a href="#" class="facebook py-3">
                        <span>
                            <i class="fa fa-facebook"></i>
                            @venuebook
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 mb-2 col-6">
                    <a href="#" class="pinterest py-3">
                        <span>
                            <i class="fa fa-pinterest"></i>
                            @venuebook
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 mb-2 col-6">
                    <a href="#" class="linkedin py-3">
                        <span>
                            <i class="fa fa-linkedin"></i>
                            @venuebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.model')
@endsection
