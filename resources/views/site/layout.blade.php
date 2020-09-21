<!DOCTYPE html>
<html>

<head>
    <!-- /////////////////////|||||||Start Layout |||||||||||||||||||| -->
    <meta charset="UTF-8" lang="ar">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!------ start generated favicon ---->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('website/dist/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('website/dist/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('website/dist/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('website/dist/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('website/dist/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('website/dist/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('website/dist/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('website/dist/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('website/dist/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('website/dist/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('website/dist/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('website/dist/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('website/dist/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('website/dist/img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!------ End generated favicon ----->
    <link rel="stylesheet" href="{{asset('website/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
    <link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
    @yield('styles')
    <!-- /////////////////////|||||||End Layout |||||||||||||||||||| -->
</head>

<body>
    <div class="body-overlay"></div>
    <!-- Start Loading-Page -->
    <div class="loader">
        <svg width="200" height="200" id="svg">
            <circle id="dot1" class="shape" />
            <circle id="dot2" class="shape" />
            <circle id="dot3" class="shape" />
            <circle id="dot4" class="shape" />
        </svg>
    </div>
    <!-- End Loading-Page -->

    <!-- /////////////////////|||||| Start Navbar |||||||||||||||||||||||||||| -->
    <div class="navbar">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2 col-sm-2 col-xs-7">
                    <div class="nav-right">
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <a href="{{url('/')}}" class="logo-nav">
                            <img src="{{asset('website/dist/img/logo.png')}}">
                        </a>
                    </div>
                </div>

                <div class="col-md-7 col-sm-6 col-xs-0">
                    <div class="navy">
                        <ul class="nav cf" id="ul1">
                            <li><a href="{{url('/')}}" class="active">الرئيسية</a></li>
                            <li><a href="{{url('categories')}}">الأقسام</a></li>
                            <li><a href="{{url('my_orders')}}">الطلبات</a></li>
                            <li><a href="{{url('favourites')}}">المفضلة</a></li>
                            <li><a href="{{url('multimedia')}}">مكتبة الصور والفيديوهات</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-5">

                    <ul class="nav-tools">

                        <!-- /////////////////////||||||||||| Start Searchbar |||||||||||||||||||| -->
                        <li>
                            <form action="{{url('products')}}" method="GET" class="search-form" role="search">
                                <div class="form-group" id="search">
                                    <input type="text" class="form-control" placeholder="بحث">
                                    <button type="submit" class="form-control form-control-submit">بحث</button>
                                    <span class="nav-icon"> <i class="fas fa-search"></i></span>
                                </div>
                            </form>
                        </li>
                        <!-- /////////////////////||||||||||| End Searchbar |||||||||||||||||||| -->

                        <!-- /////////////////////||||||||||| Start Nav Cart |||||||||||||||||||| -->
                        <li>
                            <a href="javascript:void(0)" class="menu-toggle">
                                <span class="nav-icon"> <i class="fas fa-shopping-cart"></i></span>
                            </a>
                            <div class="side-menu notifi-menu">
                                <button type="button" class="nav-icon close-menu"><i class="fas fa-times"></i></button>
                               <div class="fixed-li">
                                   <a href="{{url('cart')}}" class="btn-hvr"><span class="z-span">عرض السلة</span></a>
                               </div>
                                <ul>
                                    <li>
                                        <div class="flexx cart_item">
                                            <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                                            <span class="bell">
                                                <img src="{{asset('website/dist/img/asset8.png')}}">
                                            </span>
                                            <div class="notify">
                                                <h4>مجموعة الصابون الطبيعى</h4>
                                                <p>140 ريال سعودى</p>
                                                <p> الكمية : <span class="quantity_in">3</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flexx cart_item">
                                            <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                                            <span class="bell">
                                                <img src="{{asset('website/dist/img/asset6.png')}}">
                                            </span>
                                            <div class="notify">
                                                <h4>زيت الأرغان الأصلى</h4>
                                                <p>140 ريال سعودى</p>
                                                <p> الكمية : <span class="quantity_in">7</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flexx cart_item">
                                            <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                                            <span class="bell">
                                                <img src="{{asset('website/dist/img/asset8.png')}}">
                                            </span>
                                            <div class="notify">
                                                <h4>مجموعة الصابون الطبيعى</h4>
                                                <p>140 ريال سعودى</p>
                                                <p> الكمية : <span class="quantity_in">3</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flexx cart_item">
                                            <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                                            <span class="bell">
                                                <img src="{{asset('website/dist/img/asset6.png')}}">
                                            </span>
                                            <div class="notify">
                                                <h4>زيت الأرغان الأصلى</h4>
                                                <p>140 ريال سعودى</p>
                                                <p> الكمية : <span class="quantity_in">7</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="lock">
                                        <img src="{{asset('website/dist/img/lock.png')}}">
                                        <p>
                                            من فضلك قم بتسجيل الدخول لكى يتم عملية الشراء والدفع وأكثر
                                        </p>

                                        <button type="button" class="btn-hvr" data-toggle="modal" data-target="#signUpModal">
                                            <span class="z-span">تسجيل جديد </span></button>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <!-- /////////////////////||||||||||| End Nav Cart |||||||||||||||||||| -->

                        <!----------------********************** show this if user logged in ***************------------------------------>
                        <!-- /////////////////////||||||||||| Start Nav Profile  |||||||||||||||||||| -->
                        <li>
                            <a href="javascript:void(0)" class="menu-toggle">
                                <span class="nav-icon"><i class="far fa-user"></i></span>
                            </a>
                            <div class="side-menu flexx pro-menu">
                                <div>
                                    <button type="button" class="nav-icon close-menu"><i class="fas fa-times"></i></button>
                                    <img src="{{asset('website/dist/img/user.png')}}">
                                    <h4>ريم فارس</h4>
                                    <p>reem.faris@gmail.com</p>
                                    <ul>
                                        <li>
                                            <a href="{{url('my-profile')}}">
                                                الحساب الشخصى
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('my_orders')}}">
                                                طلباتى
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('my_addresses')}}">
                                                عنوانى
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('my_wallet')}}">
                                                المحفظة
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/')}}">
                                                تسجيل الخروج
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- /////////////////////||||||||||| End Nav Profile  |||||||||||||||||||| -->

                        <!----------------********************** show this if user NOT logged in ***************------------------------------>
                        <!-- /////////////////////||||||||||| Start Sign up/In Links  |||||||||||||||||||| -->
                        <!-- <li>
                            <a href="javascript:void(0)" class="menu-toggle">
                                <span class="nav-icon"><i class="fas fa-user-plus"></i></span>
                            </a>
                            <div class="side-menu flexx pro-menu">
                                <div>
                                    <button type="button" class="nav-icon close-menu"><i class="fas fa-times"></i></button>
                                    <img src="{{asset('website/dist/img/logo.png')}}">
                                    <h3 class="welcomee">أهلا بك ...</h3>
                                    <p>كل ما تحتاجه ستجده فى متجرنا</p>
                                    <a href="{{url('categories')}}" class="pink_a">تسوق الان</a>
                                    <div class="log_anchors">
                                        <button type="button" class="btn-hvr" data-toggle="modal" data-target="#signInModal">
                                            <span class="z-span">تسجيل دخول </span>
                                        </button>
                                        <button type="button" class="btn-hvr" data-toggle="modal" data-target="#signUpModal">
                                            <span class="z-span">تسجيل جديد </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <!-- /////////////////////||||||||||| End Sign up/In Links  |||||||||||||||||||| -->

                        <!-- /////////////////////||||||||||| Start Nav Notifications  |||||||||||||||||||| -->
                        <li>
                            <a href="javascript:void(0)" class="menu-toggle">
                                <span class="nav-icon"><i class="far fa-bell"></i></span>
                            </a>
                            <div class="side-menu notifi-menu">
                                <button type="button" class="nav-icon close-menu"><i class="fas fa-times"></i></button>
                                <div class="fixed-li">
                                   <a href="{{url('notifications')}}" class="btn-hvr"><span class="z-span">كل الإشعارات</span></a>
                               </div>
                                <ul>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد إشعار جديد إشعار جديد إشعار جديد إشعار جديدإشعار جديدإشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{url('my-profile')}}" class="flexx">
                                            <span class="bell"><i class="fas fa-bell"></i></span>
                                            <div class="notify">
                                                <h4>إشعار جديد</h4>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل فى المساحة هذا النص هذا النص</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- /////////////////////||||||||||| End Nav Notifications  |||||||||||||||||||| -->

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////////////////|||||| End Navbar |||||||||||||||||||||||||||| -->
    <!---////////////  //////////////////------------>



    <!---////////////  //////////////////------------>
    @yield('content')
    <!-- /////////////////////||||||||||||||||||||||||||||| Start Footer |||||||||||||||||||||||||||| -->

    <footer class="footer">
        <div class="foot-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 col-xs-12">
                        <div class="foot1">
                            <a href="{{url('/')}}" class="foot-logo">
                                <img src="{{asset('website/dist/img/logo.png')}}">
                            </a>
                            <p>
                                هذا النص هو مثال لنص يمكن ان يستبدل من مولد النص العربى
                                هذا النص هو مثال لنص يمكن ان يستبدل من مولد النص العربى
                                هذا النص هو مثال لنص يمكن ان يستبدل من مولد النص العربى
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-xs-6">
                        <div class="foot1">
                            <h3 class="f-title">الصفحات الرئيسية</h3>
                            <ul>
                                <li><a href="{{url('about')}}">من نحن</a></li>
                                <li><a href="{{url('multimedia')}}">مكتبة المالتيميديا</a></li>
                                <li><a href="{{url('use_policy')}}">سياسة الاستخدام</a></li>
                                <li><a href="{{url('privacy')}}">الشروط والأحكام</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-xs-6">
                        <div class="foot1">
                            <h3 class="f-title">خدمة العملاء</h3>
                            <ul>
                                <li><a href="{{url('contact-us')}}">اتصل بنا</a></li>
                                <li><a href="{{url('return_policy')}}">سياسة الاسترجاع</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-xs-12">
                        <div class="foot1">
                            <h3 class="f-title">روابط سريعة</h3>
                            <ul>
                                <li><a href="{{url('my-profile')}}">الحساب</a></li>
                                <li><a href="{{url('favourites')}}">المفضلة</a></li>
                                <li>
                                    <ul class="social">
                                        <li><a href="www.facebook.com" target="_blank" class="icon-f"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="www.google.com" target="_blank" class="icon-g"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="www.twitter.com" target="_blank" class="icon-tw"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="www.instagram.com" target="_blank" class="icon-ig"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            &copy;
            جميع الحقوق محفوظة لدى شركة<a href="http://panorama-q.com/">بانوراما القصيم</a> <span id="currentYear"></span>
        </div>
    </footer>
    <!--Scroll Button-->
    <div id="scroll-top">
        <i class="fa fa-angle-up"></i>
        <p>إلى الأعلى</p>
    </div>
    <!-- /////////////////////||||||||||||||||||||||||||||| End Footer |||||||||||||||||||||||||||| -->



    <!-- /////////////////////||||||||||||||||||||||||||||| Start Modals |||||||||||||||||||||||||||| -->
    @include('site.modals.sign-in-modal')
    @include('site.modals.sign-up-modal')
    @include('site.modals.forgot-pass-modal')
    @include('site.modals.confirm-code-modal')
    @include('site.modals.set-pass-modal')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Modals |||||||||||||||||||||||||||| -->


    <!-- /////////////////////||||||||||||||||||||||||||||| Start Script |||||||||||||||||||||||||||| -->
    <script src="{{asset('website/dist/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('website/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/dist/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('website/dist/js/wow.min.js')}}"></script>
    <script>
        $(function() {
            new WOW().init();
        });
    </script>
    <script src="{{asset('website/dist/js/main.js')}}"></script>
    <script>
        $('ul.nav-tools .dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.sm-remove').click(function() {
                $(this).closest('.one-cart').parent("li").remove();
            });
        });
    </script>
    <!---- search form -->
    <script>
        $(document).ready(function() {
            $('#search').on("click", (function(e) {
                $(".search-form .form-group").addClass("sb-search-open");
                e.stopPropagation()
            }));
            $(document).on("click", function(e) {
                if ($(e.target).is("#search") === false && $(".search-form .form-control").val().length == 0) {
                    $(".search-form .form-group").removeClass("sb-search-open");
                }
            });
            $(".form-control-submit").click(function(e) {
                $(".search-form .form-control").each(function() {
                    if ($(".search-form .form-control").val().length == 0) {
                        e.preventDefault();
                        $(this).css('border', '2px solid #ea6b60');
                    }
                })
            })
        })
    </script>
    <!---- side menu --->
    <script>
        $(".menu-toggle").click(function() {
            $(this).next(".side-menu").toggleClass("show-menu");
        });
        $(".close-menu").click(function() {
            $(this).parents(".side-menu").toggleClass("show-menu");
        });
    </script>
    <!---- remove cart item --->
    <script>
        $(".remove_item").click(function() {
            $(this).parent(".cart_item").fadeOut(300);
        });
    </script>
    <!---- local storage remember me ---->
    <script>
        const rmCheck = document.getElementById("rememberMe"),
            emailInput = document.getElementById("number_phone");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
        }

        function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
    </script>
    <!------- confirm code ----------->
    <script>
            $(document).ready(function() {
                $('#confirmCodeModal').on('shown.bs.modal', function() {
                    $('.spinInput').trigger('focus');
                });
            });
    </script>
    @yield('scripts')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Script |||||||||||||||||||||||||||| -->
</body>

</html>