
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


    <meta charset="utf-8" />
            <title>BOOKIE - Admin & Dashboard Template</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta content="Premium Admin & Dashboard - BOOKIE" name="description" />
            <meta content="" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">



     <!-- App css -->
     <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('{{ asset('backend') }}/assets/images/p-1.png'); background-size: cover; background-position: center center;">
   <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a class='logo logo-admin' href='index.html'>
                                            <img src="{{ asset('backend') }}/assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Bookie</h4>
                                        <p class="text-muted  mb-0">Sign in to continue to Bookie.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="username" name="email" placeholder="Enter e-mail address" value="{{ old('email') }}">
                                        </div><!--end form-group-->
                                        {{-- email error --}}
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        {{-- email error --}}
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password" value="{{ old('password') }}">
                                        </div><!--end form-group-->
                                        {{-- password error --}}
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        {{-- password error --}}
                                        <div class="form-group row mt-3">
                                            <div class="col-sm-6">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess" name="remember">
                                                    <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div><!--end col-->
                                            @if (Route::has('password.request'))
                                            <div class="col-sm-6 text-end">
                                                <a class='text-muted font-13' href='{{ route('password.request') }}'><i class="dripicons-lock"></i> Forgot password?</a>
                                            </div><!--end col-->
                                            @endif
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        {{-- <p class="mb-0">Don't have an account ?  <a class='text-primary ms-2' href='{{ route('register') }}'>Free Resister</a></p> --}}
                                    </div>
                                    <hr class="hr-dashed mt-4">
                                    <div class="text-center mt-n5">
                                        <h6 class="card-bg px-3 my-4 d-inline-block">Login With</h6>
                                    </div>
                                    <div class="d-flex justify-content-center mb-1">
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-primary rounded-circle me-2">
                                            <i class="fab fa-facebook align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle me-2">
                                            <i class="fab fa-twitter align-self-center"></i>
                                        </a>
                                        <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-danger rounded-circle">
                                            <i class="fab fa-google align-self-center"></i>
                                        </a>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- vendor js -->

    <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/feather-icons/feather.min.js"></script>
    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

</body>

</html>
