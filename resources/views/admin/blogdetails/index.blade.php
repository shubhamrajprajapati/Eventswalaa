@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Blog List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/blogs/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted Blog</a>
                    <a href="{{ url('admin/blogs/create') }}"  class="btn btn-dark btn-sm float-right">Add Blog</a> 
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
                        <th>Name</th>
                        <th>Images</th>
                        <th>Category</th>
                        <th>status</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->name }}</td>
                        <td><img src="{{ asset('uploads/blogs/'.$blog->image)}}" alt="{{ $blog->title}}" width="100"></td>

                        <td>{{ $blog->blogcategory->name }} </td>
                        <td>{{ $blog->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/blogs/'.$blog->id.'/edit') }}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i>
                                </a>
                                <a href="{{ url('admin/blogs-delete/'.$blog->id) }}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty

                    <tr>
                        <td colspan="6">No blogs Available </td>
                    </tr>
                    @endforelse
                   
                </tbody>
            </table>
            {{-- {{ $categories->links() }} --}}
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