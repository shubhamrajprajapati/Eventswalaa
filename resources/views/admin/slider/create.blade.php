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
                    <a href="{{ url('admin/sliders') }}"  class="btn btn-dark btn-sm float-right">Back</a> 
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
            <form action="{{url('admin/sliders')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="from-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Description</label>
                        <textarea name="description" id="editor" class="form-control"></textarea>
                    </div>
                    <div class="from-group">
                        <label for="">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                    <div class="from-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" />
                    </div>
                    <div class="from-group">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" width="30px"> Checked = Hidden, Un-Checked = Visible
                    </div>
                </div>
                <div >
                    <button type="submit" class="btn btn-dark col-md-4">Save </button>
                </div>
            </form>
                </div>
            </div>
        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
          
            @endsection