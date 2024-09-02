@extends('layouts.backmaster')


@section('contant')
<x-back-page-header title="Products Gallery"></x-back-page-header>
<x-back-page-header title="#Under Product ID - {{ $id }}"></x-back-page-header>

<div class="row">
    <div class="col-lg-6">

        @if (session('gallery_status'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('gallery_status')}}.
        </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <div>
                    <a href="{{ route('gallery.create',$id) }}" class="btn btn-primary">
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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($galleries as $gallery)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" alt="" style="width:80px; height:80px; border-radius:50%;">
                                </td>
                                <td>
                                    {{ $gallery->title }}
                                </td>
                                <td>
                                    <form id="statusForm" action="{{ route('gallery.status',[$gallery->id,$id]) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-switch form-switch-info" name="status">
                                            <input onchange="document.getElementById('statusForm').submit()" {{ $gallery->status == 'active' ? "checked" : "" }} class="form-check-input" type="checkbox" id="customSwitchInfos">
                                            <label class="form-check-label {{ $gallery->status == 'deactive' ? 'text-danger' : 'text-success' }}" for="customSwitchInfos">{{ $gallery->status }}</label>
                                        </div>
                                    </form>
                                    {{-- <a href="{{ route('gallery.status',[$gallery->id,$id]) }}" class="badge bg-danger text-white" style="cursor: pointer">{{ $gallery->status }}</a> --}}
                                </td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                            <a class="dropdown-item" href="{{ route('gallery.edit',[$gallery->id,$id]) }}"> <i class="ti ti-pencil"></i>  Edit</a>
                                            <form action="{{ route('gallery.destroy',[$gallery->id,$id]) }}" method="POST">
                                                @csrf
                                            <button type="submit" class="dropdown-item"> <i class="ti ti-trash"></i>  Delete</button>
                                            </form>
                                            {{-- <a class="dropdown-item" href="#">Tasks Details</a> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-danger text-center">no data found!!</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('gallery.store',$id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="gallery_img" src="{{ asset('uploads/default/default.png') }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Image</label>
                    <input onchange="document.getElementById('gallery_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="image">
                    <label class="form-label mt-2" for="setFullName">Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>
@endsection
