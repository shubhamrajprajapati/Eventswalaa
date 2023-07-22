@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Sliders List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/sliders/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted Sliders</a>
                    <a href="{{ url('admin/sliders/create') }}"  class="btn btn-dark btn-sm float-right">Add Sliders</a> 
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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id}}</td>
                            <td>{{ $slider->title}}</td>
                            <td>{{ $slider->description}}</td>
                            <td><img src="{{ asset("$slider->image")}}" alt="{{ $slider->title}}"></td>
                            <td>{{ $slider->status == 1 ? 'Hidden':'Visible'}}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ url('') }}" data-color="#265ed7"
                                        ><i class="icon-copy dw dw-edit2"></i></a>
                                    <a href="{{ url('')}}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i
                                    ></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{-- {{ $categories->links() }} --}}
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
          
            @endsection