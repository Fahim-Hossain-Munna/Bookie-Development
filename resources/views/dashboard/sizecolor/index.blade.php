@extends('layouts.backmaster')

@section('contant')

 <x-back-page-header title="Size & Color"></x-back-page-header>


    <div class="row">
        <div class="col-lg-6">

            {{-- @if (session('tag_success'))
            <div class="alert alert-outline-success" role="alert">
                <strong>Well done!</strong> {{session('tag_success')}}.
            </div>
            @endif --}}

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Size</h4>
                    <div>
                        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#insertsize">
                           <i class="ti ti-circle-plus"></i> Create
                        </button>
                    </div>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>Serial ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                                <a class="dropdown-item" href=""> <i class="ti ti-pencil"></i>  Edit</a>
                                                <form action="" method="POST">
                                                    @csrf
                                                <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i>  Delete</button>
                                                </form>
                                                {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        <div class="col-lg-6">

            {{-- @if (session('tag_success'))
            <div class="alert alert-outline-success" role="alert">
                <strong>Well done!</strong> {{session('tag_success')}}.
            </div>
            @endif --}}

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Color</h4>
                    <div>
                        <a href="" class="btn btn-primary">
                           <i class="ti ti-circle-plus"></i> Create
                        </a>
                    </div>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>Serial ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v font-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                                <a class="dropdown-item" href=""> <i class="ti ti-pencil"></i>  Edit</a>
                                                <form action="" method="POST">
                                                    @csrf
                                                <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i>  Delete</button>
                                                </form>
                                                {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>




{{-- modal size insert start --}}

<!-- Modal -->
<div class="modal fade" id="insertsize" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('size&color.store') }}" method="post">
        <div class="modal-body">
                @csrf
                <label class="form-label mt-2" for="setFullName">Size Measurement</label>
                <input type="text" class="form-control" id="setFullName" placeholder="Enter Measurement" name="size">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button name="edit_insert" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
{{-- modal size insert end --}}



@endsection
