@extends('layouts.backmaster')


@section('contant')
<x-back-page-header title="Settings"></x-back-page-header>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="met-profile">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="met-profile-main">
                                <div class="met-profile-main-pic">
                                    @if (auth()->user()->image == 'default.png')
                                    <img src="{{ asset('uploads/default') }}/{{auth()->user()->image}}" alt="" height="110" class="rounded-circle">
                                    @else
                                    <img src="{{ asset('uploads/profile') }}/{{ auth()->user()->image }}" alt="" height="110" class="rounded-circle">
                                    @endif
                                    <span class="met-profile_main-pic-change">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                </div>
                                <div class="met-profile_user-detail">
                                    <h5 class="met-user-name">{{ auth()->user()->name }}</h5>
                                    <p class="mb-0 met-user-name-post">{{ auth()->user()->designation }}</p>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-4 ms-auto align-self-center">
                            <ul class="list-unstyled personal-detail mb-0">
                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : {{ auth()->user()->contact }}</li>
                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : {{ auth()->user()->email }}</li>
                                <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> :
                                    <a href="{{ auth()->user()->website }}" class="font-14 text-primary">{{ auth()->user()->website }}</a>
                                </li>
                            </ul>

                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end f_profile-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-lg-4">
        @if (session('update_info'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('update_info')}}.
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('settings.store') }}" method="post">
                    @csrf
                    <label class="form-label" for="setFullName">Full Name</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Name" name="name">
                    <label class="form-label mt-2" for="setEmail">Email address</label>
                    <input type="email" class="form-control" id="setEmail" placeholder="Enter Email" name="email">
                    <label class="form-label mt-2" for="setPassword">Contact</label>
                    <input type="tel" class="form-control" id="setPassword" placeholder="Enter Contact" name="contact">
                    <label class="form-label mt-2" for="setPassword">Designation</label>
                    <input type="text" class="form-control" id="setPassword" placeholder="Enter Designation" name="designation">
                    <label class="form-label mt-2" for="setPassword">Web Site Address</label>
                    <input type="text" class="form-control" id="setPassword" placeholder="Enter website" name="website">
                    <button type="submit" name="infobtn" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
    <div class="col-lg-4">
        @if (session('update_info_image'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('update_info_image')}}.
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('settings.update',auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <label class="form-label" for="setFullName">Profile Picture</label>
                    <input type="file" class="form-control" id="setFullName"  name="image">
                    <button type="submit" name="imagebtn" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
    <div class="col-lg-4">
        @if (session('update_info_pass'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('update_info_pass')}}.
        </div>
        @endif
        @if (session('update_error'))
        <div class="alert alert-outline-danger" role="alert">
            <strong>error !</strong> {{session('update_error')}}.
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('settings.store') }}" method="post">
                    @csrf
                    <label class="form-label" for="setFullName">Current Password</label>
                    <input type="password" class="form-control" id="setFullName" placeholder="Current Password" name="currentpassword">
                    <label class="form-label mt-2" for="setEmail">New Password</label>
                    <input type="password" class="form-control" id="setEmail" placeholder="New Password" name="password">
                    <label class="form-label mt-2" for="setPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="setPassword" placeholder="Confirm Password" name="password_confirmation">
                    <button type="submit" name="passbtn" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>

</div>


@endsection
