@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Add Blog List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/blogs/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted Blog</a>
                    <a href="{{ url('admin/blogs/') }}"  class="btn btn-dark btn-sm float-right">Back</a> 
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

            <div class="row p-3">
                <form action="{{ url('admin/blogs') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-blogs-tab" data-toggle="tab" href="#nav-blogs" role="tab" aria-controls="nav-blogs" aria-selected="true">
                                Blogs
                            </a>
                            <a class="nav-item nav-link" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="false">
                                SEO
                            </a>
                            <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false">
                                status
                            </a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-blogs" role="tabpanel" aria-labelledby="nav-blogs-tab">
                                {{-- tab --}}
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <div class="form-group ">
                                            <label for="">Category</label>
                                            <select name="blogcategory_id" id="" class="form-control">
                                                @foreach ($blogcategories as $blogitem)
                                                    <option value="{{ $blogitem->id }}">{{ $blogitem->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group ">
                                            <label for="">Blog Heading</label>
                                            <input type="text" name="name" id="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group ">
                                            <label for="">Blog slug</label>
                                            <input type="text" name="slug" id="" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group ">
                                            <label for="">Blog slug</label>
                                            <textarea name="description" id="editor" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group ">
                                            <label for="">Blog image</label>
                                            <input type="file" name="image" id="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                {{-- end tab --}}
                            </div>
                            <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                                {{-- tab --}}
                                  <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="">Meta title</label>
                                        <textarea name="meta_title" id="" cols="20" rows="10" class="form-control" ></textarea>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="">Meta Keyword</label>
                                        <textarea name="meta_keyword" id="" cols="20" rows="10" class="form-control" ></textarea>
                                    </div>
                                  </div>
                                  <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="">Meta Description</label>
                                        <textarea name="meta_description" id="" cols="20" rows="10" class="form-control"></textarea>
                                    </div>
                                  </div>
                                {{-- end tab --}}
                            </div>
                            <div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                                {{-- tab --}}
                                 <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" id="">
                                    </div>
                                 </div>
                                {{-- end tab --}}
                            </div>
                          </div>
                          <div class="mt-4">
                            <button type="submit" class="btn btn-dark col-lg-4">Save</button>
                          </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0"></h2>
        </div>
            @push('script')
                <script>
                    window.addEventListener('close-modal', event =>{
                        $('#AddBrandModal').model('hide');
                    })
                </script>
            @endpush
            @endsection