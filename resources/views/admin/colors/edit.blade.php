@extends('layouts.admin')
@section('content')

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Edit Colors</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/colors/delete') }}" class="btn btn-danger btn-sm float-right mx-4">Deleted colors</a>
                    <a href="{{ url('admin/colors') }}" class="btn btn-dark btn-sm float-right">Back</a> 
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
                    <form action="{{url('admin/colors/'.$color->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="from-group">
                                <label for="">Color Name</label>
                                <input type="text" name="name"  value="{{ $color->name }}" class="form-control" required>
                            </div>
                            <div class="from-group">
                                <label for="">Color Code</label>
                                <input type="text" name="code" value="{{ $color->code }}" class="form-control" required>
                            </div>
                            <div class="from-group">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" {{ $color->status == '1' ? 'checked':'' }}> Checked = Hidden, Un-Checked = Visible
                            </div>
                            <div>
                                <button type="submit" class="btn btn-dark col-md-4 ">Update </button>
                            </div>
                        </div>
                       
                    </form>
                </div>
               </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>

@endsection 