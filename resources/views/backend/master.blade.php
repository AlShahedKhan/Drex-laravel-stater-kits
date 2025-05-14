<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ @globalAsset(setting('favicon'))}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" name="url" id="url" value="{{ url('') }}">
    <meta name="keywords" content="admin, admin dashboard, admin template, backend, bootstrap, crm, laravel, laravel admin, web application">
    <meta name="description" content="OnestDrax - Laravel Admin Dashboard Starter Kit with User Manager, Role, Permission, Language Manage with RTL & More">
    @if(findDirectionOfLang()== "rtl")
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap.rtl.min.css">
    @else
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap.min.css">
    @endif

    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/semantic.rtl.min.css">
    <!-- metis menu for sidebar  -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/metisMenu.min.css">
    {{-- Chart js --}}
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/apexcharts.min.css">
    <!-- jvectormap css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/jvectormap/css/jquery-jvectormap-1.2.2.css') }}">
    {{-- All icon-fonts --}}
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/icon-fonts.css">
    <!-- All Plugin  -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/plugin.css">
    <!-- Custom CSS  start -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style2.css">
</head>

<body class="{{ @findDirectionOfLang() }}" dir="{{ @findDirectionOfLang() }}">

    <div id="layout-wrapper">
        <!-- start header -->
        @include('backend.partials.header')
        <!-- end header -->

        <!-- start sidebar -->
        @include('backend.partials.sidebar')
        <!-- end sidebar -->

        <main class="main-content ph-24 ph-lg-32 pt-100 mt-4">
            <!-- start main content -->
            @yield('content')
            <!-- end main content -->

            <!-- start footer -->
            @include('backend.partials.footer')
            <!-- end footer -->
        </main>
    </div>


    {{-- theme mode switch --}}
    <script src="{{ asset('backend') }}/assets/js/theme.js"></script>
    <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/semantic.min.js"></script>
    <!-- Metis menu for sidebar  -->
    <script src="{{ asset('backend') }}/assets/js/metisMenu.min.js"></script>
    <!-- jvectormap js -->
    <script src="{{ asset('backend/vendors/jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jvectormap/js/jquery-jvectormap-us-merc-en.js') }}"></script>
    {{-- Chart --}}
    <script src="{{ asset('backend') }}/vendors/apexchart/js/apexcharts.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/chartjs/js/chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/ot-charts.js"></script>

    <script src="{{ asset('backend') }}/assets/js/datepicker.min.js"></script>
    {{--All Plugin js --}}
    <script src="{{ asset('backend') }}/assets/js/plugin.js"></script>
    <!-- Vendor JS end  -->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>
    {{-- Custom Js --}}
    <script src="{{ asset('backend') }}/assets/js/custom.js"></script>

    {{-- alert message --}}
    @include('backend.partials.alert-message')
    {{-- delete method --}}

    @stack('script')
</body>

</html>
