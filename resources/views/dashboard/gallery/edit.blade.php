@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Gallery Edit Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('gallery.update',[$gallery->id,$pid]) }}" method="post">
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="gallery_img" src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Image</label>
                    <input onchange="document.getElementById('gallery_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="image">
                    <label class="form-label mt-2" for="setFullName">Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title" value="{{ $gallery->title }}">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

@endsection
