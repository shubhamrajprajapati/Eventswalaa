@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Order List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/orders/create') }}"  class="btn btn-dark btn-sm float-right mr-4">Add orders</a> 
                </div>
            </div>
            <div class="col-lg-12">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('message') }}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
            <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>user</th>
                        <th>occasion</th>
                        <th>date</th>
                        <th>address</th>
                        <th>Hotel mob</th>
                        <th>guests</th>
                        <th>budget</th>
                        <th>meal</th>
                        <th>drinks</th>
                        <th>name</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>notes</th>
                        <th>tracking</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $orderitem)
                    <tr>
                        <td>{{$orderitem->id }}</td>
                        <td>
                            @if (!empty($orderitem->user->name))
                                {{$orderitem->user->name }}
                            @else
                                Register users
                            @endif
                            

                        </td>
                        <td>{{$orderitem->occasion_type }}</td>
                        <td>{{$orderitem->date }}</td>
                        <td>{{$orderitem->venue_address }}</td>
                        <td>
                            @if (!empty($orderitem->productsPhone->hotel_phone))
                                {{ $orderitem->productsPhone->hotel_phone }}
                            @else
                                No phone 
                            @endif
                        </td>
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
                        <td>{{$orderitem->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/orders/'.$orderitem->id.'/edit') }}" data-color="#265ed7">
                                    <i class="icon-copy dw dw-edit2"></i></a>
                            </div>
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

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
          
@endsection