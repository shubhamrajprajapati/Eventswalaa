@extends('layouts.admin')
@section('content')

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            {{-- @if (session('status'))
            <h2 class="h3 mb-0 alert alert-success">
                {{ session('status') }} 
            </h2>
            @endif --}}

        </div>

        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Add Category </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/category/delete') }}" class="btn btn-danger btn-sm float-right mx-4">Deleted Category</a>
                    <a href="{{ url('admin/category') }}" class="btn btn-dark btn-sm float-right">Back</a> 
                </div>
                    <div class="col-md-12">
                        <hr>
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
            <div class="p-3 row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="">Category Name</label>
                                <input type="text" name="name" class="form-control" id="" required>
                                {{-- @error('name')
                                    <small class="text-danger"> {{ message }} </small>
                                @enderror --}}
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="from-control">
                        </div>
                        <div class="form-group">
                            <label for="">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm col-md-4 btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>

@endsection 