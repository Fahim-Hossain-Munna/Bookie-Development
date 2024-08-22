@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Tag Create Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tag.update',$tag->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <label class="form-label mt-2" for="setFullName">Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title" value="{{ $tag->title }}">
                    <label class="form-label mt-2" for="setEmail">Slug</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug" value="{{ $tag->slug }}">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

@endsection
