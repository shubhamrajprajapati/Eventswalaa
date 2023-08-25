@extends('layouts.frontend')
@section('title')
    {{ $product->meta_title }} - Venue wala
@endsection
@section('keywords')
    {{ $product->meta_keyword }} - Venue wala
@endsection
@section('description')
    {{ $product->meta_description }} - Venue wala
@endsection

@section('content')
    <section class="main-wrapper">
        <div class="container">
            <livewire:frontend.product.view :category="$category" :product="$product" :ratings="$ratings" :rating_value="$rating_value"
                :ratings_show="$ratings_show" :user_rating="$user_rating" :product_other_details="$product_other_details" />
        </div>
    </section>
    {{-- @include('layouts.model') --}}
@endsection
