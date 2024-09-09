@extends('layouts.backmaster')

@section('contant')

 <x-back-page-header title="Size & Color Trashes"></x-back-page-header>


    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Size</h4>
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
                                                <form action="{{ route('size&color.restore.size',$size->id) }}" method="POST">
                                                    @csrf
                                                   <button type="submit" class="dropdown-item"> <i class="ti ti-pencil"></i>  Restore</button>
                                                </form>
                                                 <form action="{{ route('size&color.pdelete.size',$size->id) }}" method="POST">
                                                     @csrf
                                                 <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i> Permanent Delete</button>
                                                 </form>
                                                 {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                             </div>
                                         </div>
                                     </td>
                                 </tr>

                               @empty
                                    <tr>
                                        <th colspan="4" class="text-center text-danger">no data found!</th>
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
                                                 <form action="{{ route('size&color.restore.color',$color->id) }}" method="POST">
                                                     @csrf
                                                    <button type="submit" class="dropdown-item"> <i class="ti ti-pencil"></i>  Restore</button>
                                                 </form>
                                                 <form action="{{ route('size&color.pdelete.color',$color->id) }}" method="POST">
                                                     @csrf
                                                    <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i> Permanent Delete</button>
                                                 </form>
                                                 {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                             </div>
                                         </div>
                                     </td>
                                 </tr>

                               @empty
                                <tr>
                                    <th colspan="4" class="text-center text-danger">no data found!</th>
                                </tr>
                               @endforelse

                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->

        </div>

    </div>


@endsection
