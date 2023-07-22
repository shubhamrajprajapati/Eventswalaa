@extends('layouts.admin')
@section('content')

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Edit Brand</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/brand/delete') }}" class="btn btn-danger btn-sm float-right mx-4">Deleted brand</a>
                    <a href="{{ url('admin/brand') }}" class="btn btn-dark btn-sm float-right">Back</a> 
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
                    <form action="{{url('admin/brand/'.$brand->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') 
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Select Category</label>
                                <select name="category_id" required class="form-control" id="">
                                    <option value="">--- Selct Category ----</option>
                                    @forelse ($category as $categories)
                                        <option value="{{ $categories->id }}"  {{$categories->id == $categories->category_id ? 'selected' : '' }}>{{ $categories->name }}</option>
                                    @empty
                                        <h4>No category available</h4>
                                    @endforelse
                                </select>
                            </div>

                            <div class="from-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="name" value="{{ $brand->name }}" class="form-control" required>
                            </div>
                            <div class="from-group">
                                <label for="">Brand Slug</label>
                                <input type="text" name="slug"  value="{{ $brand->slug }}" class="form-control" required>
                            </div>
                            <div class="from-group">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $brand->status == '1' ? 'checked' : ''  }}> Checked = Hidden, Un-Checked = Visible
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>
                    </form>
                </div>
               </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>

@endsection 