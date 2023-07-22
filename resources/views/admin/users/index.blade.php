@extends('layouts.admin')
@section('content')


<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">User List</div>
                </div>
                {{-- <div class="col-lg-6">
                    <a href="{{url('admin/blogcategory/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted blog category</a>
                    <a href="{{ url('admin/blogcategory/create') }}" class="btn btn-dark btn-sm float-right">Add blog category</a> 
                </div> --}}
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
                        <td>name </td>
                        <td>email </td>
                        <td>city </td>
                        <td>state </td>
                        <td>phone </td>
                        <td>alternet phone </td>
                        <td>role </td>
                        {{-- <td>image </td> --}}
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userlist as $category)
                        
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }} {{ $category->lname }}</td>
                        <td>{{ $category->email }}</td>
                        <td>{{ $category->city }}</td>
                        <td>{{ $category->state }}</td>
                        <td>{{ $category->phone }}</td>
                        <td>{{ $category->alternet_phone }}</td>
                        <td>
                            @if ( $category->role_as == 1)
                                Admin
                            @elseif($category->role_as == 2)
                                Vendor
                            @else
                                User
                            @endif
                        </td>
                        {{-- <td> <img src="{{ asset("uploads/profile/".$category->image)}}" width="100"/></td> --}}
                        {{-- <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td> --}}
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/users/'.$category->id.'/edit') }}" data-color="#265ed7">
                                    <i class="icon-copy dw dw-edit2"></i>
                                </a>
                                <a href="{{ url('admin/users-delete/'.$category->id) }}" data-color="#e95959">
                                    <i class="icon-copy dw dw-delete-3"></i>
                                </a>
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
 @push('script')
     
 @endpush
@endsection 