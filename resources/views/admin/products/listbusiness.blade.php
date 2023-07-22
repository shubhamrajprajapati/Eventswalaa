@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Business List</div>
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
                            <th>Id</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>Venue name</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Max capacity</th>
                            <th>Description</th>
                            <th> url</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($businesslist as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->owner_name }} </td>
                                <td> {{ $item->owner_phone }} </td>
                                <td> {{ $item->owner_email }} </td>
                                <td> {{ $item->venue_name }} </td>
                                <td> {{ $item->state }} </td>
                                <td> {{ $item->city }} </td>
                                <td> {{ $item->address }} </td>
                                <td> {{ $item->max_capacity }} </td>
                                <td> 
                                    <div style="height:100px; overflow:scroll;">
                                        {{ $item->description }}
                                    </div>
                                 </td>
                                <td> <a href="{{ $item->venue_url }} " target="_blank" rel="noopener noreferrer">Visit Site</a> </td>
                                
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