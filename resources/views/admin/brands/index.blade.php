@extends('layouts.admin')
@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        @include('livewire.admin.brand.model-form')
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Brand List</div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/brand/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted brand</a>
                    <a href="{{ url('admin/brand/create') }}"  class="btn btn-dark btn-sm float-right">Add brand</a> 
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
                        <th>Category</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($brands as $brand)
                        
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            @if ($brand->category )
                            {{ $brand->category->name }}
                            @else
                                No Category
                            @endif
                        </td>
                        <td>{{ $brand->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/brand/'.$brand->id.'/edit') }}" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="{{ url('admin/brand-delete/'.$brand->id) }}" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    @empty

                    <tr>
                        <td colspan="5">No Brand Found </td>
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