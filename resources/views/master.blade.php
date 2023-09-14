<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>@yield('title')</title>
    @include('includes.link')
</head>

<body>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->


@include('includes.menu')


@yield('mainContent')

@include('sweetalert::alert')


@include('includes.footer')

<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->


@include('includes.script')

</body>

</html>
