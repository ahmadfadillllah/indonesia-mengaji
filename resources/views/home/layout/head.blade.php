<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('home') }}/assets/images/logo/03.png">

    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/assets/css/style.css">
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

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->
