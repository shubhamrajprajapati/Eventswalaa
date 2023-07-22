
@extends('layouts.admin')
@section('content')

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
           
        </div>

        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Category </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/category') }}" class="btn btn-dark btn-sm float-right mr-4">Back Category</a> 
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
                        <th>id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td> <img src="{{asset('uploads/category/'.$category->image)}}" width="100"/></td>
                        <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/category-re-store/'.$category->id) }}" data-color="#e95959"> <i class="icon-copy ion-ios-upload"></i></a>
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