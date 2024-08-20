@extends('layouts.backmaster')


@section('contant')

<x-back-page-header title="Category"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
        @if (session('category_create'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('category_create')}}.
        </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <div>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">
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
                        @forelse ($categories as $category)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/category') }}/{{ $category->image }}" alt="" style="width: 80px; height:80px">
                                </td>
                                <td>
                                    {{ $category->title }}
                                </td>
                                <td>
                                    <form action="{{ route('category.status',$category->slug) }}" method="POST">
                                        @csrf
                                    <button type="submit" class="{{ ($category->status == 'deactive') ? 'badge badge-soft-danger' : 'badge badge-soft-success' }}">{{ $category->status }}</button>
                                    </form>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                            <a class="dropdown-item" href="{{ route('category.edit',$category->id) }}"> <i class="ti ti-pencil"></i>  Edit</a>
                                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
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
</div>

@endsection
