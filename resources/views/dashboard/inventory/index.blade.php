@extends('layouts.backmaster')


@section('contant')
<x-back-page-header title="Products Inventory"></x-back-page-header>
<x-back-page-header title="#Under Product ID - {{ $id }}"></x-back-page-header>

<div class="row">
    <div class="col-lg-6">

        @if (session('inventory_status'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('inventory_status')}}.
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                {{-- <div>
                    <a href="{{ route('gallery.create',$id) }}" class="btn btn-primary">
                       <i class="ti ti-circle-plus"></i> Create
                    </a>
                </div> --}}
                <h3>Table's of Inventory</h3>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                        <tr>
                            <th>Serial ID</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($inventories as $inventory)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    {{ $inventory->hasonewithsize->size_title }}
                                </td>
                                <td>
                                    {{ $inventory->hasonewithcolor->color_title }}
                                </td>
                                <td>
                                    {{ $inventory->quantity }}
                                </td>
                                <td>
                                    <form id="statusForm{{$inventory->id}}" action="{{ route('inventory.status',[$inventory->id,$id]) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-switch form-switch-info" name="status">
                                            <input onchange="document.getElementById('statusForm{{$inventory->id}}').submit()" {{ $inventory->status == 'active' ? "checked" : "" }} class="form-check-input" type="checkbox" id="customSwitchInfos">
                                            <label class="form-check-label {{ $inventory->status == 'deactive' ? 'text-danger' : 'text-success' }}" for="customSwitchInfos">{{ $inventory->status }}</label>
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
                                            <a class="dropdown-item" href="{{ route('inventory.edit',[$inventory->id,$id]) }}"> <i class="ti ti-pencil"></i>  Edit</a>
                                            <form action="{{ route('inventory.destroy',[$inventory->id,$id]) }}" method="POST">
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
            <div class="card-header">
                <h3>Insert Inventory</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('inventory.store',$id) }}" method="post">
                    @csrf
                    <label class="form-label mt-2" for="setFullName">Select Size</label>
                    <select class="form-select" name="size_id">
                        <option class="py-2">Select Size</option>
                        @foreach ($sizes as $size)
                            <option class="py-2" value="{{ $size->id }}">{{ $size->size_title }} - ({{ $size->size }})</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Select Color</label>
                    <select class="form-select" name="color_id">
                        <option class="py-2">Select Color</option>
                        @foreach ($colors as $color)
                            <option class="py-2" value="{{ $color->id }}">{{ $color->color_title }} - ({{ $color->color }})</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Product Quantity</label>
                    <input type="number" class="form-control" id="setFullName" placeholder="Product Quantity" name="quantity">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>
@endsection
