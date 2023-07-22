@extends('layouts.frontend')
@section('title')Write a Reviews - Venue wala @endsection
@section('keywords')Write a Reviews - Venue wala @endsection
@section('description')Write a Reviews - Venue wala @endsection

@section('content')
<section class="main-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card box-shadow border-none mt-4 h-100">
                    <div class="card-header card-header bg-default text-white border-none">
                        You are writing a review for {{ $product->name }}
                    </div>
                    <div class="card-body border-none">
                        <div class="">
                            <form action="" method="post">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="heading">Rate Heading</label>
                                        <input type="text" name="review_heading" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="heading">What do you like about this cake?(Rate Description)  </label>
                                        <textarea name="user_review" class="form-control" cols="5" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-md ">Submit Review</button>
                                </div>
                            </form>                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
