<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/edule/eduLe/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2022 02:41:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edule - eLearning Website Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets{{('/css/vendor/plugins.min.css')}}">
    <link rel="stylesheet" href="assets{{('/css/style.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

    <div class="main-wrapper main-wrapper-02">

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo">
                    <a href="index.html"><img src="assets/images/logo-icon.png" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                <div class="login-header-search dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>

                    <div class="search-input dropdown-menu">
                        <form action="#">
                            <input type="text" placeholder="Search here">
                        </form>
                    </div>

                </div>
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action ml-auto">
                    <div class="dropdown">
                        <button class="action notification" data-bs-toggle="dropdown">
                            <i class="flaticon-notification"></i>
                            <span class="active"></span>
                        </button>
                        <div class="dropdown-menu dropdown-notification">
                            <ul class="notification-items-list">
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-shopping-cart"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i class="icofont-simple-right"></i></a>
                        </div>
                    </div>

                    <a class="action author" href="#">
                        <img src="/storage/profilephoto/{{ Auth::User()->image}}" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="{{route('show.profile')}}"><i class="icofont-user"></i> Profile</a></li>
                            <li><a class="" href="#"><i class="icofont-inbox"></i> Inbox</a></li>
                            <div class="mt-3 space-y-1">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Admin Start -->
        <div class="section overflow-hidden position-relative" id="wrapper">

            <!-- Sidebar Wrapper Start -->
            <div class="sidebar-wrapper">
                <div class="menu-list">
                    <a class="active" href="courses-admin.html"><img src="assets/images/menu-icon/icon-1.png" alt="Icon"></a>
                    <a href="messages.html"><img src="assets/images/menu-icon/icon-2.png" alt="Icon"></a>
                    <a href="overview.html"><img src="assets/images/menu-icon/icon-3.png" alt="Icon"></a>
                    <a href="engagement.html"><img src="assets/images/menu-icon/icon-4.png" alt="Icon"></a>
                    <a href="traffic-conversion.html"><img src="assets/images/menu-icon/icon-5.png" alt="Icon"></a>
                </div>
            </div>
            <!-- Sidebar Wrapper End -->

            <div class="page-content-wrapper py-0">
                @if(auth()->user()->role==(808))

                <!-- Admin Tab Menu Start -->
                <div class="nav flex-column admin-tab-menu">
                    <a href="{{route('view.create.user')}}" class="active">Add User</a>
                    <a href="{{route('all.users')}}" class="active">Users</a>
                </div>
                @endif
                <!-- Admin Tab Menu End -->

                @if(auth()->user()->role==(407))
                 <!-- Teaacher Tab Menu Start -->
                 <div class="nav flex-column admin-tab-menu">
                    <a href="overview.html">Overview</a>
                    <a href="students.html" class="active">My Coruses</a>
                    <a href="students.html" class="active">Students</a>
                    <a href="{{route('courses.create')}}" class="active">Create New Course</a>
                    <a href="reviews.html">Review’s</a>
                    <a href="engagement.html">Course Engagement</a>
                    <a href="traffic-conversion.html">Traffic & Conversion</a>
                </div>
                @endif
                <!-- Teacher Tab Menu End -->
                @if(auth()->user()->role==(734))
                <!-- Student Tab Menu Start -->
                <div class="nav flex-column admin-tab-menu">
                   <a href="overview.html">Overview</a>
                   <a href="students.html" class="active"></a>
                   <a href="students.html" class="active"></a>
                   <a href="students.html" class="active"></a>
                   <a href="reviews.html"></a>
                   <a href="engagement.html"></a>
                   <a href="traffic-conversion.html"></a>
               </div>
               @endif
               <!-- student Tab Menu End -->


               @yield('content')
            </div>

        </div>
        <!-- Courses Admin End -->

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">

                <img class="shape-1 animation-down" src="assets/images/shape/shape-21.png" alt="Shape">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="assets/images/logo.png" alt="Logo"></a>
                                </div>

                                <div class="widget-address">
                                    <h4 class="footer-widget-title">Caribbean Ct</h4>
                                    <p>Haymarket, Virginia (VA).</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Category</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Creative Writing</a></li>
                                        <li><a href="#">Film & Video</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Business Analytics</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Quick Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Discussion</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Course FAQ’s</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                    <div class="widget-form">
                                        <form action="#">
                                            <input type="text" placeholder="Email here">
                                            <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                    </div>
                </div>

                <img class="shape-2 animation-left" src="assets/images/shape/shape-22.png" alt="Shape">

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; 2021 <span> Edule </span> Made with <i class="icofont-heart-alt"></i> by <a href="#">Codecarnival</a></p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets{{('/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="assets{{('/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="assets{{('/js/plugins.min.js')}}"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Charts JS -->
    <script src="assets{{('/js/plugins/jquery.vmap.min.js')}}"></script>
    <script src="assets{{('/js/plugins/jquery.vmap.world.js')}}"></script>
    <script src="assets{{('/js/plugins/jquery.vmap.sampledata.js')}}"></script>
    <script src="assets{{('/js/student-map.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/edule/eduLe/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2022 02:41:14 GMT -->
</html>
