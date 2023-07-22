@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Hotel List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url('admin/products/create') }}"  class="btn btn-success btn-sm float-right mx-4">Add Hotel</a> 
                    <a href="{{url('admin/products/')}}" class="btn btn-dark btn-sm float-right ">Back</a>
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
                    @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->image }}</td>
                        <td>
                            @if ($product->category)
                                {{ $product->category->name }}
                                @else{
                                    No Category
                                }
                            @endif
                        </td>
                        <td>{{ $product->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/products-re-store/'.$product->id) }}" data-color="#e95959"><i class="icon-copy ion-ios-upload"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty

                    <tr>
                        <td colspan="6">No Products Available </td>
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