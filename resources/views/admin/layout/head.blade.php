<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Indonesia Mengaji" name="description" />>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('home') }}/assets/images/logo/03.png">

    <!-- jsvectormap css -->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @if (session('info'))
        <script>
            Swal.fire(
            'Upps!',
            '{{ session('info') }}',
            'info'
            )
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire(
            'Good Job!',
            '{{ session('success') }}',
            'success'
            )
        </script>
    @endif

    <!-- Begin page -->
    <div id="layout-wrapper">
