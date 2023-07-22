@extends('layouts.frontend')
@section('title')Events walaa - My Reviews @endsection
@section('keywords')Events walaa - My Reviews @endsection
@section('description')Events walaa - My Reviews @endsection


@section('content')
<section class="pt-5">
    <div class="container pt-4">
        <div class="mt-5">
            <div class="card box-shadow border-none ">
                <div class="card-header bg-default text-white border-none h4">{{ __('My Review') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 border-right">
                                @include('layouts.includes.users.menu-link')
                            </div>
                            <div class="col-md-9 ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="h4 my-4">
                                            My Review
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-responsive table-border table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Date</th>
                                                        <th>Heading</th>
                                                        <th>Description</th>
                                                        <th>Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($user_review as $itemreview)
                                                        <tr>
                                                            <td>{{ $itemreview->id }}</td>
                                                            <td>{{ $itemreview->created_at->format('d/m/Y') }}</td>
                                                            <td>{{ $itemreview->star_heading }}</td>
                                                            <td>{{ $itemreview->star_description }}</td>
                                                            <td>{{ $itemreview->stars_rated }}</td>
                                                        </tr>
                                                    @empty
                                                        <div class="h4">There are no reviews or ratings</div>
                                                    @endforelse
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection
