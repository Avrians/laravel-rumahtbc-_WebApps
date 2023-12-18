<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>RumahTBC</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    @include('user.layouts.style')

</head>

<body>
    <!-- ======= Header ======= -->
    @include('user.layouts.header')
    <!-- End Header -->

    <!-- ======= Content ======= -->
    @yield('content')
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    @include('user.layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('user.layouts.scripts')

</body>

</html>
