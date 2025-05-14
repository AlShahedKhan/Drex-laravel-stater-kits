<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <!-- Favicon start -->
        <link rel="icon" type="image/x-icon" href="{{ @globalAsset(setting('favicon')) }}">
        <!-- Favicon end -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Onest Multipurpose Admin &amp; Dashboard Template" name="description" />
        <meta content="Onest Tech" name="author" />

        <!-- vendors css  -->
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/lineicons/lineicons.css" />
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/rtlcss/css/semantic.rtl.min.css" />
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors//apexchart/css/apexcharts.min.css">

        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/sweet-alert/css/sweetalert2.min.css"/>

        <!-- metis menu for sidebar  -->
        <link rel="stylesheet" href="{{ asset('backend') }}/vendors/metis-menu/css/metisMenu.min.css" />
        <!-- vendors CSS end  -->

        <!-- Custom CSS  start -->
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css" />
        <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/custom.css" />
        <!-- Custom CSS  end -->
    </head>
</head>

<body class="default-theme">
    <!-- Start With main container  -->
    <main>
        <section>
            <div class="row p-0 m-0">
                <!-- Start With left box section -->
                <div
                    class="col-md-6 left-box col-custom-height frame p-0 text-center d-flex justify-content-center align-items-center flex-column">
                    <div class="left-box-image">
                        <!-- box image  -->
                        <img src="{{ asset('backend') }}/assets/images/Login img.png" alt="Login-img.png">
                    </div>
                    <h1><span class="title">{{ ___('common.turn_your_ideas_into_reality') }}</span>🤞</h1>
                    <p class="text">{{ ___('common.consistent_quality_and_experience_across') }} <br>{{ ___('common.all_platforms_and_devices') }}</p>
                </div>
                <!-- End left box section -->
                <!-- Start With signin form section -->
                @yield('content')
                <!-- End signin form section -->
            </div>
        </section>
    </main>
    <!-- End main container -->
    <script src="{{ asset('backend') }}/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/sweet-alert/js/sweetalert2@11.min.js"></script>

    @include('backend.partials.alert-message')
    <!-- vendors js  -->

    @yield('script')
    
    
</body>

</html>
