@extends('layouts.frontend')
@section('title')Events walaa - My Order @endsection
@section('keywords')Events walaa - My Order @endsection
@section('description')Events walaa - My Order @endsection


@section('content')
<section class="pt-5">
    <div class="container pt-4">
        <div class="mt-5">
            <div class="card box-shadow border-none ">
                <div class="card-header bg-default text-white border-none h4">
                    {{ __('My Order') }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 border-right">
                            @include('layouts.includes.users.menu-link')
                        </div>
                        <div class="col-md-9 ">
                            <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>user</th>
                                        <th>occasion</th>
                                        <th>date</th>
                                        <th>address</th>
                                        <th>guests</th>
                                        <th>budget</th>
                                        <th>meal</th>
                                        <th>drinks</th>
                                        <th>name</th>
                                        <th>mobile</th>
                                        <th>email</th>
                                        <th>notes</th>
                                        <th>tracking_msg</th>
                                       
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($order_view as $orderitem)
                                    <tr>
                                        <td>{{$orderitem->id }}</td>
                                        <td>{{$orderitem->user->name }}</td>
                                        <td>{{$orderitem->occasion_type }}</td>
                                        <td>{{$orderitem->date }}</td>
                                        <td>{{$orderitem->venue_address }}</td>
                                        <td>{{$orderitem->no_guests }}</td>
                                        <td>{{$orderitem->budget_range }}</td>
                                        <td>{{$orderitem->req_meal }}</td>
                                        <td>{{$orderitem->req_drinks }}</td>
                                        <td>{{$orderitem->name }}</td>
                                        <td>{{$orderitem->mobile }}</td>
                                        <td>{{$orderitem->email }}</td>
                                        <td>
                                            @php
                                                echo $orderitem->notes
                                            @endphp
                                        </td>
                                        <td>
                                            @if ($orderitem->tracking_msg<=1)
                                                <div >
                                                   <a href="#" class="btn btn-primary btn-sm">Lead</a>
                                                </div>
                                            @elseif ($orderitem->tracking_msg<=2)
                                                <div>
                                                    <a href="#" class="btn btn-warning btn-sm">Talk counselor</a>
                                                </div>
                                            @elseif ($orderitem->tracking_msg<=3)
                                                <div>
                                                    <a href="#" class="btn btn-danger btn-sm"> Reject</a>
                                                </div>
                                            @elseif ($orderitem->tracking_msg<=4)
                                                <div>
                                                    <a href="#" class="btn btn-success btn-sm"> Success</a>
                                                </div>
                                            @else
                                                <div>
                                                    Not Follow
                                                </div>
                                            @endif
                                        </td>
                                      
                                    </tr>
                                    @empty
                
                                    <tr>
                                        <td colspan="8">No Order Found </td>
                                    </tr>
                                    @endforelse
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection