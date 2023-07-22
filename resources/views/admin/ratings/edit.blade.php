@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-12">
                    <div class="h5 pd-20 mb-0">Rating List <span><a class="btn btn-dark btn-sm float-right" href="{{ url('/admin/ratings')}}">Back</a></span></div>
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

            <div class="offset-lg-2 col-lg-8 ">
                <form action="{{ url('/admin/ratings/'.$ratings->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="rating-css mt-2 ">
                       <select name="stars_rated" id="" class="form-control">
                            <option value="{{ $ratings->stars_rated }}" selected>{{ $ratings->stars_rated }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                       </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="heading">Rate Heading</label>
                            <input type="text" name="star_heading" class="form-control" value="{{ $ratings->star_heading }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="heading">What do you like about this cake?(Rate Description)  </label>
                            <textarea name="star_description" class="form-control" cols="5" rows="5" >{{ $ratings->star_description}}</textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
          
            @endsection