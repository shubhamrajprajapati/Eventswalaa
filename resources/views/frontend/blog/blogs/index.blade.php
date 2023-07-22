@extends('layouts.frontend')
@section('title'){{$blogcategory->meta_title}} - Venue wala @endsection
@section('keywords'){{$blogcategory->meta_title}} - Venue wala @endsection
@section('description'){{$blogcategory->meta_title}} - Venue wala @endsection

@section('content')
    <section class="main-wrapper">
        <div class="container">
            <livewire:frontend.product.blogindex :blogcategory="$blogcategory" :blogsdata="$blogsdata"/>
        </div>
    </section>
    @include('layouts.model')
@endsection
