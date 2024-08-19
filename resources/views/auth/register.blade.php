{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


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
                                    <form class="my-4" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="Enter username" value="{{ old('username') }}">
                                        </div><!--end form-group-->
                                        {{-- email error --}}
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        {{-- email error --}}
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">Email Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter e-mail address" value="{{ old('email') }}">
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
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter confirm password" value="{{ old('password_confirmation') }}">
                                        </div><!--end form-group-->
                                        {{-- password_confirmation error --}}
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        {{-- password_confirmation error --}}

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Register <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Have an account ?  <a class='text-primary ms-2' href='{{ route('login') }}'>Please Log In</a></p>
                                    </div>
                                    <hr class="hr-dashed mt-4">
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
