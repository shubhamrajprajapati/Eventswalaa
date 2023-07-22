@extends('layouts.admin')
@section('content')


<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Add Blog Category </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/blogcategory/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted blog category</a>
                    <a href="{{ url('admin/blogcategory/') }}" class="btn btn-dark btn-sm float-right">Back</a> 
                </div>
            </div>
            <hr>
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
                <div class="col-lg-12">
                    <form action="{{ url('admin/blogcategory/'.$blogcategory->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="">Blog Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $blogcategory->name }}" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="">Blog Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{ $blogcategory->slug }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Blog Description</label>
                            <textarea name="description" class="form-control">{{ $blogcategory->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="from-control">
                            <img src="{{ asset("uploads/blogcategory/".$blogcategory->image)}}"  width="100" alt="image">
                        </div>
                        <div class="form-group">
                            <label for="">Blog Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $blogcategory->meta_title }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="">Blog Meta Keyword</label>
                            <input type="text" name="meta_keyword" value="{{ $blogcategory->meta_keyword }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Blog Meta Description</label>
                            <input type="text" name="meta_description" value="{{ $blogcategory->meta_description }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{ $blogcategory->status == '1' ? 'checked':'' }}>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm col-md-4 btn-dark">Update</button>
                        </div>
                    </form>
                </div>
               </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
 
@endsection 