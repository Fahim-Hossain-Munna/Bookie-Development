<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }} - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">



    <!-- App css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    {{-- tiny mce --}}
    <script src="https://cdn.tiny.cloud/1/xg4lsmt7zxrncgo50cmt0hw9rvg8z5u3o4zxlen93hqhgj9t/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    @livewireStyles
</head>

<body id="body">
    <!-- leftbar-tab-menu -->
    @include('layouts.admin.sidebar')
    <!-- end leftbar-tab-menu-->


    <!-- Top Bar Start -->
    @include('layouts.admin.header')
    <!-- Top Bar End -->


    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">
            <div class="container-fluid">
                {{-- yield start --}}
                @yield('contant')
                {{-- yield end --}}
            </div>

            <!-- Footer Start -->
            @include('layouts.admin.footer')
            <!-- end Footer -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- vendor js -->

    <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- select 2 --}}
    <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/feather-icons/feather.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/analytics-index.init.js"></script>
    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireScripts
</body>
<!--end body-->

</html>
