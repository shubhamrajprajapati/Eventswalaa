
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
        </div>
        <div class="card-box pb-10">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <div class="h5 pd-20 mb-0">Category </div>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('admin/category/delete')}}" class="btn btn-danger btn-sm float-right mx-4">Deleted Category</a>
                    <a href="{{ url('admin/category/create') }}" class="btn btn-dark btn-sm float-right">Add Category</a> 
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
                        <th>id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td> <img src="{{asset("$category->image")}}" width="100"/></td>
                        <td>{{ $category->status == '1' ? 'Hidden':'Visible' }}</td>
                        <td>
                            <div class="table-actions">
                                <a href="{{ url('admin/category/'.$category->id.'/edit') }}" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="{{ url('admin/category-delete/'.$category->id) }}" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
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
<!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <form action="{{url('admin/category/'.$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="modal-body">
                    <h4> Are you sure you want to delete this data ? </h4>
                    <input type="hidden" name="status" {{ $category->status == '1' ? 'checked' : '' }}>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes. Delete</button>
                    </div>
                </form>
        </div>
        </div>
    </div> --}}
        {{-- <div class="row">
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/medicine-bro.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Services</h3>
                        <p class="max-width-200">
                            We provide superior health care in a compassionate maner
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/remedy-amico.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Medications</h3>
                        <p class="max-width-200">
                            Look for prescription and over-the-counter drug information.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-20">
                <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                    <div class="img pb-30">
                        <img src="vendors/images/paper-map-cuate.svg" alt="" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Locations</h3>
                        <p class="max-width-200">
                            Convenient locations when and where you need them.
                        </p>
                    </div>
                </a>
            </div>
        </div> --}}

       
<!-- welcome modal end -->