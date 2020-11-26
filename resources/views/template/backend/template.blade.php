<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title') - Point of Sale</title>
    <!--favicon-->
    @include('template.backend.layout.css')
</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('template.backend.layout.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('template.backend.layout.header')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            @yield('content')
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        @include('template.backend.layout.footer')
        <!--End footer-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    @include('template.backend.layout.js')
</body>

</html>
