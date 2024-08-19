@extends('layouts.backmaster')


@section('contant')

<x-back-page-header title="Category"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
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
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Order Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#124781</td>
                            <td>25/11/2018</td>
                            <td>$321</td>
                            <td><span class="badge badge-soft-success">Approved</span></td>
                            <td class="text-end">
                                <div class="dropdown d-inline-block">
                                    <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <i class="las la-ellipsis-v font-20 text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11" style="">
                                        <a class="dropdown-item" href="#">Creat Project</a>
                                        <a class="dropdown-item" href="#">Open Project</a>
                                        <a class="dropdown-item" href="#">Tasks Details</a>
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
</div>

@endsection
