@extends('layouts.frontend');
@section('title')Blogs - Event Wala @endsection

@section('content')
    <section class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-4 mb-5 text-center h4">
                        Blogs        
                    </div>
                </div>
                @forelse ($blogcategories as $categoryItem)
                <div class=" col-lg-4 mb-5">
                    <div class="box-shadow h-100">
                       <a class="text-decoration-none text-dark" href="{{url('/blog/'.$categoryItem->slug)}}">
                        <div class="what-we-image border-radius">
                            <img src="{{ asset('uploads/blogcategory/'.$categoryItem->image) }}" class="mx-auto d-block img-fluid" alt="{{ $categoryItem->name }}" style="width: 100%;">
                        </div>
                        <div class="what-we-headeing">
                            {{ $categoryItem->name }}
                        </div>
                        <div class="what-we-sub-headeing">
                            @php
                                echo $categoryItem->description
                            @endphp
                        </div>
                       </a>
                    </div>
                </div>
                @empty
                    <div class="h5">
                        No blogs categories available
                    </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection
@include('layouts.model')
