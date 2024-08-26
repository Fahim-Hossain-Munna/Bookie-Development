@extends('layouts.backmaster')

@section('contant')

 <x-back-page-header title="Size & Color"></x-back-page-header>


    <div class="row">
        <div class="col-lg-6">

            @if (session('size_status'))
            <div class="alert alert-outline-success" role="alert">
                <strong>Well done!</strong> {{session('size_status')}}.
            </div>
            @endif

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
                                <th>Measurement</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               @forelse ($sizes as $size)
                                 <tr>
                                     <td>
                                         {{ $loop->index + 1 }}
                                     </td>
                                     <td>
                                         {{ $size->size_title }}
                                     </td>
                                     <td>
                                         {{ $size->size }}
                                     </td>
                                     <td class="text-end">
                                         <div class="dropdown d-inline-block">
                                             <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                 <i class="las la-ellipsis-v font-20 text-muted"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                                 <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editsize{{ $size->id }}"> <i class="ti ti-pencil"></i>  Edit</button>
                                                 <form action="{{ route('size&color.delete.size',$size->id) }}" method="POST">
                                                     @csrf
                                                 <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i>  Delete</button>
                                                 </form>
                                                 {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                             </div>
                                         </div>
                                     </td>
                                 </tr>

                                {{-- edit modal for size start --}}
                                <div class="modal fade" id="editsize{{ $size->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Size Update</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('size&color.update.size',$size->id) }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                                <label class="form-label mt-2" for="setFullName">Size Title</label>
                                                <input type="text" class="form-control" id="setFullName" placeholder="Enter Title" name="size_title" value="{{ $size->size_title }}">
                                                <label class="form-label mt-2" for="setFullName">Size Measurement</label>
                                                <input type="text" class="form-control" id="setFullName" placeholder="Enter Measurement" name="size" value="{{ $size->size }}">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                      </div>
                                    </div>
                                  </div>
                                {{-- edit modal for size end --}}


                               @empty
                               <tr>
                                <th colspan="5" class="text-center text-danger">no data found!</th>
                                </tr>
                               @endforelse

                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>


        <div class="col-lg-6">

            @if (session('color_status'))
            <div class="alert alert-outline-success" role="alert">
                <strong>Well done!</strong> {{session('color_status')}}.
            </div>
            @endif

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Color</h4>
                    <div>
                        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#insertcolor">
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
                                <th>Measurement</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               @forelse ($colors as $color)
                                 <tr>
                                     <td>
                                         {{ $loop->index + 1 }}
                                     </td>
                                     <td>
                                         {{ $color->color_title }}
                                     </td>
                                     <td>
                                            <span style="display:inline-block; width:30px; height:30px; border-radius:50%; background:{{ $color->color }}">
                                            </span>
                                            <p>{{ $color->color }}</p>
                                     </td>
                                     <td class="text-end">
                                         <div class="dropdown d-inline-block">
                                             <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                 <i class="las la-ellipsis-v font-20 text-muted"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                                 <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editcolor{{ $color->id }}"> <i class="ti ti-pencil"></i>  Edit</button>
                                                 <form action="{{ route('size&color.delete.color',$color->id) }}" method="POST">
                                                     @csrf
                                                 <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i>  Delete</button>
                                                 </form>
                                                 {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                             </div>
                                         </div>
                                     </td>
                                 </tr>

                                {{-- edit modal for color start --}}
                                <div class="modal fade" id="editcolor{{ $color->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Color Update</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('size&color.update.color',$color->id) }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                                <label class="form-label mt-2" for="setFullName">Color Title</label>
                                                <input type="text" class="form-control" id="setFullName" placeholder="Enter Title" name="color_title" value="{{ $color->color_title }}">
                                                <label class="form-label mt-2" for="setFullName">Color Measurement</label>
                                                <input type="color" class="form-control" id="setFullName" placeholder="Enter Measurement" name="color" value="{{ $color->color }}">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                      </div>
                                    </div>
                                  </div>
                                {{-- edit modal for color end --}}


                               @empty
                               <tr>
                                <th colspan="5" class="text-center text-danger">no data found!</th>
                                </tr>
                               @endforelse

                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->

            {{-- modal size insert start --}}

<!-- Modal -->
<div class="modal fade" id="insertsize" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Size Insert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('size&color.store.size') }}" method="post">
        <div class="modal-body">
                @csrf
                <label class="form-label mt-2" for="setFullName">Size Title</label>
                <input type="text" class="form-control" id="setFullName" placeholder="Enter Title" name="size_title">
                <label class="form-label mt-2" for="setFullName">Size Measurement</label>
                <input type="text" class="form-control" id="setFullName" placeholder="Enter Measurement" name="size">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
{{-- modal size insert end --}}


{{-- color insert start --}}

<!-- Modal -->
<div class="modal fade" id="insertcolor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Color Insert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('size&color.store.color') }}" method="post">
        @csrf
        <div class="modal-body">
                <label class="form-label mt-2" for="setFullName">Color Title</label>
                <input type="text" class="form-control" id="setFullName" placeholder="Enter Title" name="color_title">
                <label class="form-label mt-2" for="setFullName">Color Measurement</label>
                <input type="color" class="form-control" id="setFullName" placeholder="Enter Measurement" name="color">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
{{-- modal color insert end --}}

        </div>


@endsection
