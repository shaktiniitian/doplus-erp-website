<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Doplus Technologies Pvt Ltd</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/letter-d.png" rel="icon">
    <link href="assets/img/letter-d.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index">

    <header id="header" class="header d-flex align-items-center sticky-top">

        <div class="container-fluid container-xl position-relative d-flex align-items-center">


            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo.png" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('home')}}#hero">Home</a></li>
                    <li class="dropdown"><a href="Doplusjaurney.html"><span>About US</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{route('doplusjaurney')}}">Doplus Journey</a></li>
                            <li><a href="{{route('ourobjective')}}">Our Objective</a></li>

                        </ul>

                    <li>
                        <!--<li><a href="doplusbusineserp.html">Doplus Business ERP</a></li>-->
                    <li><a href="{{route('dtpleducationerp')}}">Doplus Educational ERP</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{route('webdesign')}}">Web Design</a></li>
                            <li><a href="{{route('development')}}">Web Development</a></li>
                            <li><a href="{{route('mobileapplication')}}">Mobile Application</a></li>
                            <li><a href="{{route('erpdevelopment')}}">Custom ERP Development</a></li>

                        </ul>

                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a style="background: #F05709; border-radius: 30px; padding: 5px 10px 5px 10px; color: white;"
                            class="btn-getstarted d-flex" href="#" data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">Get Enquiry</a></li>

                    <li>
                        <a style="background: #67ad66; border-radius: 30px; padding: 5px 10px 5px 10px; color: white; margin-left: 10px;"
                            class="btn-getstarted d-flex" href="{{route('login')}}">Login</a>
                    </li>
                    @if (auth()->user())
                        
                    <li>
                        <a style="background: #67ad66; border-radius: 30px; padding: 5px 10px 5px 10px; color: white; margin-left: 10px;"
                            class="btn-getstarted d-flex" href="{{route('login')}}">LogOut</a>
                    </li>
                    @endif

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>




        </div>
    </header>
    <main class="main">

        @yield('content')
    </main>


    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about" style="margin-top: 0px;">
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.facebook.com/doplusschoolerp"><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <h6 style="margin-top: 20px;color: black; font-weight: 700;">Doplus Technologies Pvt Ltd. (DTPL)
                    </h6>
                    </a>
                    <div class="footer-contact pt-3" style="margin-top: 0px;">
                        <p>G7Suite 715, 7th Floor, SRS Tower</p>
                        <p>Sec.-31, Faridabad, Haryana -121003 NCR INDIA</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+91 9599844612</span></p>
                        <p><strong>Email:</strong> <span>support@doplus.in</span></p>
                    </div>

                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Doplus (DTPL) Products</h4>
                    <ul>
                        <li><a href="./dtpleducationerp.html">Doplus Educational ERP</a></li>
                        <li><a href="doplusbusineserp.html">Doplus Business ERP</a></li>
                        <!-- <li><a href="#">Doplus Real Estate ERP</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Doplus (DTPL) Services</h4>
                    <ul>
                        <li><a href="webdesign.html">IT Security Compliance with Audits</a></li>
                        <li><a href="Web Development.html" id="webDevelopment">Web Development</a></li>
                        <li><a href="Mobile Application.html">Mobile Application</a></li>
                        <li><a href="Custom ERP Development.html">Custom ERP Development</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 footer-certified">
                    <h3 class="text-center" style="font-weight: 700;">DTPL Certified By</h3>
                    <div class="certified-logos d-flex flex-wrap justify-content-center">
                        <img src="./assets/img/govlogo/iso27001.png" alt="ISO 27001">
                        <img src="./assets/img/govlogo/iso9001.png" alt="ISO 9001">
                        <img src="./assets/img/govlogo/makeinindia.jpg" alt="Make in India">
                        <img src="./assets/img/govlogo/startupindia.png" alt="Startup India">
                        <img src="./assets/img/govlogo/msmecertified.png" alt="MSME">
                        <img src="./assets/img/govlogo/gem-logo.png" alt="Gemportal">
                        <!-- <img src="./assets/img/govlogo/trademark.jpg" alt="Tredmark"> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Doplus</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed & Developed by <a href="https://www.dopluserp.com/index.html">Doplus (DTPL)</a>
            </div>
        </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>