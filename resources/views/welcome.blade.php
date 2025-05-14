<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onestdrax</title>
    <!-- custom css link  -->

    <!-- boostrap 5 link -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/bootstrap.min.css" />

    <!-- fontawasome 4.7.0 -->
    <link rel="stylesheet" href="{{ url('frontend/landing-page/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/icon-fonts.css" />

</head>

<body>
    <!-- start page container  -->

    <header class="header">
        <div class="layout-wapper">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{asset('frontend/landing-page')}}/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#demo">Demo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#topfeatures">Top Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#inner-pages">All Pages</a>
                            </li>
                        </ul>
                        <a target="_blank" href="{{ route('login') }}" class="btn-gradient-primary  buy-now"> Demo</a>
                    </div>
                </div>
            </nav>
            <div class="row banner-section">
                <div class="col-md-12 col-lg-5 head-title text-left">
                    <h3>Multipurpose Admin Starter UI Kit</h3>
                    <h1>OnestDrax - Laravel Admin Dashboard</h1>
                    <h1>Starter Kit!</h1>

                    <p>Save <strong>20 Days</strong> of work and thousands of dollars.</p>
                    <div class="button-group">
                        <a target="_blank" href="{{ route('login') }}" class="btn-gradient-primary">View Demos</a>
                        <!-- <a href="#" type="button" class="btn-gradient-secondary">Purchase Now</a> -->
                    </div>
                    <div class="image-group">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1078.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1079.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1080.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1081.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1082.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Group-1083.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 box-banner-image">
                    <img src="{{asset('frontend/landing-page')}}/images/Banner.png" alt="Banner">
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="bg-box-gradient mb-50" id="demo">
            <div class="row">
                 <div class="col-lg-12">
                    <div class="section-title">
                        <h1 class="title">Multipurpose Admin designs to</h1>
                        <h1 class="title">get you started</h1>
                    </div>
                </div>
            </div>

            <div class="row pb-3">
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/1LRT.png" alt="">
                    <h6>Dashboard 1</h6>
                    <p>LRT</p>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/2LRT.png" alt="">
                    <h6>Dashboard 2</h6>
                    <p>LRT</p>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/3LRT.png" alt="">
                    <h6>Dashboard 3</h6>
                    <p>LRT</p>
                </div>

                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/1 RTL.png" alt="">
                    <h6>Dashboard 1</h6>
                    <p>RTL</p>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/2RTL.png" alt="">
                    <h6>Dashboard 2</h6>
                    <p>RTL</p>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/3RTL.png" alt="">
                    <h6>Dashboard 3</h6>
                    <p>RTL</p>
                </div>
            </div>

        </div>
        <div class="bg-top-right-img" id="topfeatures">
            <div class="layout-wapper">
                <div class="box-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h1 class="title">All Features you need.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-3">
                    <div class="bg-image">
                        <img src="{{asset('frontend/landing-page')}}/images/Rectangle-400.png" alt="">
                        <img src="{{asset('frontend/landing-page')}}/images/Rectangle-400.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon5.png" alt="">
                            <h6>Fully Dynamic <u>Default Dashboard</u></h6>
                            <p>In our Laravel starter kit project, we have four admin dashboards, but our default dashboard is dynamic</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/tune.png" alt="">
                            <h6>Daynamic <u>header,foooter,Sidebar</u></h6>
                            <p>We have made dynamic some sections  of our header, sidebar & footer. Like users & role, language, settings, profile update etc</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon2.png" alt="">
                            <h6>RTL Support</h6>
                            <p>We have added RTL support to some languages in our project. They are read left-to-right. If you create a language and select RTL, then when you select its default language, RTL will be enabled.</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon7.png" alt="">
                            <h6>Authentication</h6>
                            <p>In our project, we've added authentication with mail verification and forgotten password functionality</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon3.png" alt="">
                            <h6>Language Change</h6>
                            <p>We offer a dynamic language module with RTL support and the capability to change the language terms at the module/section level.</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/bootstrap.png" alt="">
                            <h6>Dynamic User & Roles</h6>
                            <p>User & Roles module is now fully functional, and we have added the ability for users & roles to be active or inactive.</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/tune.png" alt="">
                            <h6>Build with Bootstrap</h6>
                            <p>We used latest bootstrap version v5.2</p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon2.png" alt="">
                            <h6>Fully Responsive</h6>
                            <p>We offer all pages are 100% mobile responsive </p>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3">
                            <img src="{{asset('frontend/landing-page')}}/images/icon5.png" alt="">
                            <h6>Well Documentation</h6>
                            <p>All features are described in our documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-box-gradient" id="inner-pages">
            <img src="{{asset('frontend/landing-page')}}/images/Mask-Group-69.png" alt="">
            <div class="layout-wapper">
                <div class="d-flex justify-content-center align-content-end">
                    <div class="image-20-text">
                        <h1>ALL INNER PAGES</h1>
                    </div>
                </div>
            </div>

            <div class="row p-0">
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/34.png" alt="">
                    <h6></h6>
                </div>

                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/36.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/5.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/6.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/7.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/8.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/9.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/10.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/12.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/13.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/14.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/15.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/16.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/17.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/18.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/19.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/20.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/21.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/22.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/23.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/35.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/24.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/26.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/27.png" alt="">
                    <h6></h6>
                </div>

                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/31.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/33.png" alt="">
                    <h6></h6>
                </div>

                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/37.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/38.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/39.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/40.png" alt="">
                    <h6></h6>
                </div>
                <div class="col-10 col-md-5 col-lg-3">
                    <div class="circul ">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <img src="{{asset('frontend/landing-page')}}/images/41.png" alt="">
                    <h6></h6>
                </div>
            </div>


        </div>
    </main>

    <footer class="footer text-center bg-dark text-white">
        <p><span><a href="#">Purchase</a></span>ONE-TIME PAYMENT, NO MONTHLY FEES</p>
        <h1>Build stunning <span>Dashboard</span></h1>
        <h1>with Onestdrax.</h1>
        <p class="my-3">We Believe! It won’t a wrong decision in Purchasing our Onestdrax.</p>
        <div class="button-group justify-content-center mb-0">
            <a target="_blank" href="{{ route('login') }}" class="btn-gradient-primary">View Demos</a>
        </div>
    </footer>
    <!-- end page container  -->

    <!-- boostrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="bootstrap.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>
