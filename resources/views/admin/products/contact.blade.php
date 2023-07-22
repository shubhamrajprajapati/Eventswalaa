@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Contact Us List</div>
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
            <div class="table-responsive">
                <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>occasion</th>
                            <th>date</th>
                            <th>address</th>
                            <th>guests</th>
                            <th>budget </th>
                            <th>meal</th>
                            <th>drinks</th>
                            <th>name</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>notes</th>
                            <th>notes</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($contacts as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->occasion_type }} </td>
                                <td> {{ $item->date }} </td>
                                <td> {{ $item->venue_address }} </td>
                                <td> {{ $item->no_guests }} </td>
                                <td> {{ $item->budget_range }} </td>
                                <td> {{ $item->req_meal }} </td>
                                <td> {{ $item->req_drinks }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->mobile }} </td>
                                <td> {{ $item->email }} </td>
                                <td> 
                                    <div style="height:100px; overflow:scroll;">
                                        {{ $item->notes }}
                                    </div>
                                 </td>
                                <td> <a href="{{ url('admin/contact-delete/'.$item->id) }} " class="text-danger" ><i class="icon-copy dw dw-delete-3"></i></a> </td>
                                
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
@endsection