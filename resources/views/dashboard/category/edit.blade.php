@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Category Update Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
        {{-- @if (session('update_info'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('update_info')}}.
        </div>
        @endif --}}

        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="category_img" src="{{ asset('uploads/category') }}/{{ $category->image }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Image</label>
                    <input onchange="document.getElementById('category_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="image">
                    <label class="form-label mt-2" for="setFullName">Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title" value="{{ $category->title }}">
                    <label class="form-label mt-2" for="setEmail">Slug</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug" value="{{ $category->slug }}">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

@endsection
