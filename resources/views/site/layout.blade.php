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
    <meta name="msapplication-TileImage" content="{{asset('website/dist/img/favicon//ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#037AFF">
    <!------ End generated favicon ----->
    <link rel="stylesheet" href="{{asset('website/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/combobox.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('website/dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
    @yield('styles')
    <!-- /////////////////////|||||||End Layout |||||||||||||||||||| -->
</head>

<body>
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
                    <div class="nav_logo">
                        <a href="{{url('/')}}" class="logo-nav">
                            <img src="{{asset('website/dist/img/logo.png')}}">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-5 col-xs-2">
                    <div class="center_nav view_box new_btn">
                                <a href="javascript:void(0)" class="icon_mob">
                                    <i class="fas fa-search"></i>
                                </a>
                        <!-- /////////////////////||||||||||| Start Searchbar |||||||||||||||||||| -->
                                <div class="nav_mob">
                                <a href="javascript:void(0)" id="icon_close">
                                    <i class="fas fa-times"></i>
                                </a>
                                    <div class="menu_mob">
                            <div class="combobox combobox-list">
                                <div class="group">
                                    <span class="srch_i"><i class="fas fa-search"></i></span>
                                    <input id="cb1-input" class="cb_edit" type="text" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="cb1-listbox" placeholder="Search for a service or venue">
                                    <button id="cb1-button" tabindex="-1" aria-label="Open">
                                        <i class="fas fa-sort-down"></i>
                                    </button>
                                </div>
                                <!----- drop common search suggestions here -------->
                                <ul id="cb1-listbox" role="listbox" aria-label="States">
                                    <li id="lb1-al" role="option">
                                        Alabama
                                    </li>
                                    <li id="lb1-ak" role="option">
                                        Alaska
                                    </li>
                                    <li id="lb1-as" role="option">
                                        American Samoa
                                    </li>
                                    <li id="lb1-az" role="option">
                                        Arizona
                                    </li>
                                    <li id="lb1-ar" role="option">
                                        Arkansas
                                    </li>
                                    <li id="lb1-ca" role="option">
                                        California
                                    </li>
                                    <li id="lb1-co" role="option">
                                        Colorado
                                    </li>
                                    <li id="lb1-ct" role="option">
                                        Connecticut
                                    </li>
                                    <li id="lb1-de" role="option">
                                        Delaware
                                    </li>
                                    <li id="lb1-dc" role="option">
                                        District of Columbia
                                    </li>
                                    <li id="lb1-fl" role="option">
                                        Florida
                                    </li>
                                    <li id="lb1-ga" role="option">
                                        Georgia
                                    </li>
                                    <li id="lb1-gm" role="option">
                                        Guam
                                    </li>
                                    <li id="lb1-hi" role="option">
                                        Hawaii
                                    </li>
                                    <li id="lb1-id" role="option">
                                        Idaho
                                    </li>
                                    <li id="lb1-il" role="option">
                                        Illinois
                                    </li>
                                    <li id="lb1-in" role="option">
                                        Indiana
                                    </li>
                                    <li id="lb1-ia" role="option">
                                        Iowa
                                    </li>
                                    <li id="lb1-ks" role="option">
                                        Kansas
                                    </li>
                                    <li id="lb1-ky" role="option">
                                        Kentucky
                                    </li>
                                    <li id="lb1-la" role="option">
                                        Louisiana
                                    </li>
                                    <li id="lb1-me" role="option">
                                        Maine
                                    </li>
                                    <li id="lb1-md" role="option">
                                        Maryland
                                    </li>
                                    <li id="lb1-ma" role="option">
                                        Massachusetts
                                    </li>
                                    <li id="lb1-mi" role="option">
                                        Michigan
                                    </li>
                                    <li id="lb1-mn" role="option">
                                        Minnesota
                                    </li>
                                    <li id="lb1-ms" role="option">
                                        Mississippi
                                    </li>
                                    <li id="lb1-mo" role="option">
                                        Missouri
                                    </li>
                                    <li id="lb1-mt" role="option">
                                        Montana
                                    </li>
                                    <li id="lb1-ne" role="option">
                                        Nebraska
                                    </li>
                                    <li id="lb1-nv" role="option">
                                        Nevada
                                    </li>
                                    <li id="lb1-nh" role="option">
                                        New Hampshire
                                    </li>
                                    <li id="lb1-nj" role="option">
                                        New Jersey
                                    </li>
                                    <li id="lb1-nm" role="option">
                                        New Mexico
                                    </li>
                                    <li id="lb1-ny" role="option">
                                        New York
                                    </li>
                                    <li id="lb1-nc" role="option">
                                        North Carolina
                                    </li>
                                    <li id="lb1-nd" role="option">
                                        North Dakota
                                    </li>
                                    <li id="lb1-mp" role="option">
                                        Northern Marianas Islands
                                    </li>
                                    <li id="lb1-oh" role="option">
                                        Ohio
                                    </li>
                                    <li id="lb1-ok" role="option">
                                        Oklahoma
                                    </li>
                                    <li id="lb1-or" role="option">
                                        Oregon
                                    </li>
                                    <li id="lb1-pa" role="option">
                                        Pennsylvania
                                    </li>
                                    <li id="lb1-pr" role="option">
                                        Puerto Rico
                                    </li>
                                    <li id="lb1-ri" role="option">
                                        Rhode Island
                                    </li>
                                    <li id="lb1-sc" role="option">
                                        South Carolina
                                    </li>
                                    <li id="lb1-sd" role="option">
                                        South Dakota
                                    </li>
                                    <li id="lb1-tn" role="option">
                                        Tennessee
                                    </li>
                                    <li id="lb1-tx" role="option">
                                        Texas
                                    </li>
                                    <li id="lb1-ut" role="option">
                                        Utah
                                    </li>
                                    <li id="lb1-ve" role="option">
                                        Vermont
                                    </li>
                                    <li id="lb1-va" role="option">
                                        Virginia
                                    </li>
                                    <li id="lb1-vi" role="option">
                                        Virgin Islands
                                    </li>
                                    <li id="lb1-wa" role="option">
                                        Washington
                                    </li>
                                    <li id="lb1-wv" role="option">
                                        West Virginia
                                    </li>
                                    <li id="lb1-wi" role="option">
                                        Wisconsin
                                    </li>
                                    <li id="lb1-wy" role="option">
                                        Wyoming
                                    </li>
                                </ul>
                            </div>
                            <span class="in_btw">in</span>
                            <!---- location search --->
                            <div class="combobox combobox-list">
                                <div class="group">
                                    <span class="srch_i"><i class="fas fa-search"></i></span>
                                    <input id="cb2-input" class="cb_edit" type="text" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="cb2-listbox" placeholder="Search for a location">
                                    <button id="cb1-button" tabindex="-1" aria-label="Open">
                                        <i class="fas fa-sort-down"></i>
                                    </button>
                                </div>
                                <!----- drop common search suggestions here -------->
                                <ul id="cb2-listbox" role="listbox" aria-label="States">
                                    <li id="lb1-al" role="option">
                                        Alabama
                                    </li>
                                    <li id="lb1-ak" role="option">
                                        Alaska
                                    </li>
                                    <li id="lb1-as" role="option">
                                        American Samoa
                                    </li>
                                    <li id="lb1-az" role="option">
                                        Arizona
                                    </li>
                                    <li id="lb1-ar" role="option">
                                        Arkansas
                                    </li>
                                    <li id="lb1-ca" role="option">
                                        California
                                    </li>
                                    <li id="lb1-co" role="option">
                                        Colorado
                                    </li>
                                    <li id="lb1-ct" role="option">
                                        Connecticut
                                    </li>
                                    <li id="lb1-de" role="option">
                                        Delaware
                                    </li>
                                    <li id="lb1-dc" role="option">
                                        District of Columbia
                                    </li>
                                    <li id="lb1-fl" role="option">
                                        Florida
                                    </li>
                                    <li id="lb1-ga" role="option">
                                        Georgia
                                    </li>
                                    <li id="lb1-gm" role="option">
                                        Guam
                                    </li>
                                    <li id="lb1-hi" role="option">
                                        Hawaii
                                    </li>
                                    <li id="lb1-id" role="option">
                                        Idaho
                                    </li>
                                    <li id="lb1-il" role="option">
                                        Illinois
                                    </li>
                                    <li id="lb1-in" role="option">
                                        Indiana
                                    </li>
                                    <li id="lb1-ia" role="option">
                                        Iowa
                                    </li>
                                    <li id="lb1-ks" role="option">
                                        Kansas
                                    </li>
                                    <li id="lb1-ky" role="option">
                                        Kentucky
                                    </li>
                                    <li id="lb1-la" role="option">
                                        Louisiana
                                    </li>
                                    <li id="lb1-me" role="option">
                                        Maine
                                    </li>
                                    <li id="lb1-md" role="option">
                                        Maryland
                                    </li>
                                    <li id="lb1-ma" role="option">
                                        Massachusetts
                                    </li>
                                    <li id="lb1-mi" role="option">
                                        Michigan
                                    </li>
                                    <li id="lb1-mn" role="option">
                                        Minnesota
                                    </li>
                                    <li id="lb1-ms" role="option">
                                        Mississippi
                                    </li>
                                    <li id="lb1-mo" role="option">
                                        Missouri
                                    </li>
                                    <li id="lb1-mt" role="option">
                                        Montana
                                    </li>
                                    <li id="lb1-ne" role="option">
                                        Nebraska
                                    </li>
                                    <li id="lb1-nv" role="option">
                                        Nevada
                                    </li>
                                    <li id="lb1-nh" role="option">
                                        New Hampshire
                                    </li>
                                    <li id="lb1-nj" role="option">
                                        New Jersey
                                    </li>
                                    <li id="lb1-nm" role="option">
                                        New Mexico
                                    </li>
                                    <li id="lb1-ny" role="option">
                                        New York
                                    </li>
                                    <li id="lb1-nc" role="option">
                                        North Carolina
                                    </li>
                                    <li id="lb1-nd" role="option">
                                        North Dakota
                                    </li>
                                    <li id="lb1-mp" role="option">
                                        Northern Marianas Islands
                                    </li>
                                    <li id="lb1-oh" role="option">
                                        Ohio
                                    </li>
                                    <li id="lb1-ok" role="option">
                                        Oklahoma
                                    </li>
                                    <li id="lb1-or" role="option">
                                        Oregon
                                    </li>
                                    <li id="lb1-pa" role="option">
                                        Pennsylvania
                                    </li>
                                    <li id="lb1-pr" role="option">
                                        Puerto Rico
                                    </li>
                                    <li id="lb1-ri" role="option">
                                        Rhode Island
                                    </li>
                                    <li id="lb1-sc" role="option">
                                        South Carolina
                                    </li>
                                    <li id="lb1-sd" role="option">
                                        South Dakota
                                    </li>
                                    <li id="lb1-tn" role="option">
                                        Tennessee
                                    </li>
                                    <li id="lb1-tx" role="option">
                                        Texas
                                    </li>
                                    <li id="lb1-ut" role="option">
                                        Utah
                                    </li>
                                    <li id="lb1-ve" role="option">
                                        Vermont
                                    </li>
                                    <li id="lb1-va" role="option">
                                        Virginia
                                    </li>
                                    <li id="lb1-vi" role="option">
                                        Virgin Islands
                                    </li>
                                    <li id="lb1-wa" role="option">
                                        Washington
                                    </li>
                                    <li id="lb1-wv" role="option">
                                        West Virginia
                                    </li>
                                    <li id="lb1-wi" role="option">
                                        Wisconsin
                                    </li>
                                    <li id="lb1-wy" role="option">
                                        Wyoming
                                    </li>
                                </ul>
                            </div>
                            </div>
                            </div>
                        <!-- /////////////////////||||||||||| End Searchbar |||||||||||||||||||| -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-5 col-xs-3">

                    <ul class="nav-tools">

                        <!----------------********************** show this if user logged in ***************------------------------------>
                        <!-- /////////////////////||||||||||| Start Nav Profile  |||||||||||||||||||| -->
                        <!-- <li>
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
                        </li> -->
                        <!-- /////////////////////||||||||||| End Nav Profile  |||||||||||||||||||| -->

                        <!----------------********************** show these links if user NOT logged in ***************------------------------------>
                        <!-- /////////////////////||||||||||| Start Sign up/In Links  |||||||||||||||||||| -->
                        <!-- <li class="hidden-xs"><a href="#">For Partners</a></li>
                        <li class="hidden-xs"><a href="{{url('sign-up')}}">sign up</a></li>
                        <li class="hidden-xs"><a href="{{url('sign-in')}}">sign in</a></li> -->
                        <!--------->
                        <li class="dropdown view_box">
                            <a href="javascript:void(0)" id="mob_view" class="icon_mob">
                                <!----------------********************** show id="nav-icon1" if user NOT logged in ***************------------------------------>
                                <!-- <div id="nav-icon1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div> -->
                                <!----------------********************** show class="logged_crt" if user logged in ***************------------------------------>
                                <div class="logged_crt">
                                    <img src="{{asset('website/dist/img/user.png')}}">
                                     <span class="caret"></span>
                                  </div>
                            </a>
                            <div class="nav_mob">
                                <ul class="dropdown-menu menu_mob">
                                    <!----------------********************** show these links if user logged in ***************------------------------------>
                                    <li class="pro_li">
                                        <a href="{{url('editprofile')}}">
                                            <div class="img_in display-xs">
                                                 <img src="{{asset('website/dist/img/user.png')}}">
                                            </div>
                                            <h3 class="ellipsis">reem faris</h3>
                                            <span class="blue">Edit profile</span>
                                        </a>
                                    </li>
                                    <li><a href="{{url('my_orders')}}"><span class="link_i"><i class="far fa-calendar-alt"></i></span>my appointments</a></li>
                                    <li><a href="{{url('my_favourites')}}"><span class="link_i"><i class="far fa-heart"></i></span>my favourites</a></li>
                                    <li><a href="{{url('copouns')}}"><span class="link_i"><i class="fas fa-vr-cardboard"></i></span>copouns</a></li>
                                    <li><a href="{{url('categories')}}" class="display-xs"><span class="link_i"><i class="fas fa-list-ul"></i></span>categories</a></li>
                                    <li><a href="{{url('settings')}}"><span class="link_i"><i class="fas fa-cog"></i></span>settings</a></li>
                                    <!----------------********************** show these links if user NOT logged in ***************------------------------------>
                                    <li><a href="{{url('sign-up')}}" class="display-xs"><span class="link_i"><i class="fas fa-user-plus"></i></span>sign up</a></li>
                                    <li><a href="{{url('sign-in')}}" class="display-xs"><span class="link_i"><i class="far fa-user"></i></span>sign in</a></li>
                                    <li><a href="#" class="display-xs"><span class="link_i"><i class="far fa-handshake"></i></span>For Partners</a></li>
                                    <!----------------********************** end if views ***************------------------------------>
                                    <li><a href="{{url('contact-us')}}"><span class="link_i"><i class="far fa-life-ring"></i></span>customer support</a></li>
                                    <li><a href="#"><span class="link_i"><i class="fas fa-globe"></i></span>عربى</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- /////////////////////||||||||||| End Sign up/In Links  |||||||||||||||||||| -->
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

    <!-- <footer class="footer">
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
    </footer> -->
    <!--Scroll Button-->
    <div id="scroll-top">
        <i class="fa fa-angle-up"></i>
        <p>top</p>
    </div>
    <!-- /////////////////////||||||||||||||||||||||||||||| End Footer |||||||||||||||||||||||||||| -->





    <!-- /////////////////////||||||||||||||||||||||||||||| Start Script |||||||||||||||||||||||||||| -->
    <script src="{{asset('website/dist/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('website/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/dist/js/fontawesome.min.js')}}"></script>
    <script>
  window.FontAwesomeConfig = {
    searchPseudoElements: true
  }
</script>
    <!--- start combo box search -->
    <script src="{{asset('website/dist/js/combobox-list.js')}}"></script>
    <script src="{{asset('website/dist/js/listbox.js')}}"></script>
    <script src="{{asset('website/dist/js/listboxOption.js')}}"></script>
    <!--- end combo box search -->
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
            $(this).find("#nav-icon1").toggleClass("open");
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            $(this).find("#nav-icon1").toggleClass("open");
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
                        $(this).css('border', '2px solid #FBD74D');
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

    @yield('scripts')
    <!-- /////////////////////||||||||||||||||||||||||||||| End Script |||||||||||||||||||||||||||| -->
</body>

</html>