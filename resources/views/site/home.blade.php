@extends('site.layout')
@section('title' , 'حوافل || الرئيسية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
<style>
    .navbar {
        position: fixed;
        background-color: transparent;
    }
</style>
@endsection
@section('content')
<!---//////////// Start Header //////////////////------------>
<header class="my-header">
    <img src="{{asset('website/dist/img/asset1.png')}}">
    <div class="container head-txt">
        <p class="wow animate__animated animate__fadeInDownBig">حوافل للعناية بالبشرة</p>
        <h2>منتجات</h2>
        <h2> صنعت من</h2>
        <h3 class="wow animate__animated animate__fadeInRightBig">مكونات طبيعية للعناية ببشرتك</h3>
        <a href="{{url('categories')}}" class="btn-hvr btn-flex">
            <img src="{{asset('website/dist/img/favicon_white.png')}}">
            <span class="z-span"> تسوق الان </span>
            <span class="btn-icon"><i class="fas fa-long-arrow-alt-left"></i></span>
        </a>
    </div>
</header>
<!---//////////// End header //////////////////------------>

<!---//////////// Start About Section //////////////////------------>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5 col-xs-12">
                <div class="shapes">
                    <img class="wow animate__animated animate__rubberBand" src="{{asset('website/dist/img/asset19.png')}}">
                    <img class="wow animate__animated animate__fadeInTopRight" src="{{asset('website/dist/img/asset11.png')}}">
                    <img class="wow animate__animated animate__tada" src="{{asset('website/dist/img/favicon.png')}}">
                </div>
            </div>
            <div class="col-md-6 col-sm-7 col-xs-12">
                <div class="about-left">
                    <h3>تعرف على المزيد <img src="{{asset('website/dist/img/about.png')}}"></h3>
                    <h3>
                        نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية
                    </h3>
                    <p>
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                    </p>
                    <p>
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو
                    </p>
                    <div class="buttons_cont">
                        <a href="{{url('categories')}}" class="btn-hvr btn-flex">
                            <span class="z-span">تسوق الان </span>
                            <span class="btn-icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                        </a>
                        <a href="{{url('contact-us')}}" class="btn-hvr btn-flex">
                            <span class="btn-icon"><i class="fas fa-phone-volume"></i></span>
                            <span class="z-span">تواصل معنا</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End About Section //////////////////------------>

<!---//////////// Start Categories Section //////////////////------------>
<section class="categories-r">
    <div class="container">
        <div class="head-title">
            <div class="head-in">
                <h2>الأقسام</h2>
            </div>
            <p>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية</p>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                    <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End Categories Section //////////////////------------>

<!---//////////// Start recent products Section //////////////////------------>
<section class="recents">
    <div class="container">
        <div class="head-title no-bg">
            <div class="head-in">
                <h2>المنتجات الجديدة</h2>
            </div>
            <p>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية</p>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="fleximgfav">
                    <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
                    <div class="descrpp">
                        <a href="{{url('single-product')}}" class="nameprodfav">زيت الارغان الاصلي</a>
                        <b><span>100</span> ريال سعودي </b>
                        <div class="flex flexadd">
                            <div class="likerr"><i class="far fa-heart"></i></div>
                            <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="fleximgfav">
                    <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
                    <div class="descrpp">
                        <a href="{{url('single-product')}}" class="nameprodfav">زيت الارغان الاصلي</a>
                        <b><span>100</span> ريال سعودي </b>
                        <div class="flex flexadd">
                            <div class="likerr"><i class="far fa-heart"></i></div>
                            <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="fleximgfav">
                    <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
                    <div class="descrpp">
                        <a href="{{url('single-product')}}" class="nameprodfav">زيت الارغان الاصلي</a>
                        <b><span>100</span> ريال سعودي </b>
                        <div class="flex flexadd">
                            <div class="likerr"><i class="far fa-heart"></i></div>
                            <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="fleximgfav">
                    <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
                    <div class="descrpp">
                        <a href="{{url('single-product')}}" class="nameprodfav">زيت الارغان الاصلي</a>
                        <b><span>100</span> ريال سعودي </b>
                        <div class="flex flexadd">
                            <div class="likerr"><i class="far fa-heart"></i></div>
                            <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="fleximgfav">
                    <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
                    <div class="descrpp">
                        <a href="{{url('single-product')}}" class="nameprodfav">زيت الارغان الاصلي</a>
                        <b><span>100</span> ريال سعودي </b>
                        <div class="flex flexadd">
                            <div class="likerr"><i class="far fa-heart"></i></div>
                            <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End recent products Section //////////////////------------>

<!---//////////// Start offers and sale Section //////////////////------------>
<section class="my_offers">
    <div class="container">
        <div class="head-title">
            <div class="head-in">
                <h2>العروض والخصومات</h2>
            </div>
            <p>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية</p>
        </div>


        <div class="columns_r">
            <div class="wow animate__animated animate__backInDown box-wrapper">
                <a href="{{url('single-product')}}" class="three box">
                    <span class="box_dis">-20%</span>
                    <div class="box_img">
                        <img src="{{asset('website/dist/img/product2.png')}}">
                    </div>
                    <div class="box_desc">
                        <h3>مجموعة العناية بالبشرة</h3>
                        <p>
                            <span class="old_price">100 ريال سعودي</span>
                            <span class="new_price">70 ريال سعودي</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="wow animate__animated animate__backInUp box-wrapper">
                <a href="{{url('single-product')}}" class="two box">
                    <span class="box_dis">-20%</span>
                    <div class="box_img">
                        <img src="{{asset('website/dist/img/product2.png')}}">
                    </div>
                    <div class="box_desc">
                        <h3>مجموعة العناية بالبشرة</h3>
                        <p>
                            <span class="old_price">100 ريال سعودي</span>
                            <span class="new_price">70 ريال سعودي</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="wow animate__animated animate__backInDown box-wrapper">
                <a href="{{url('single-product')}}" class="one box">
                    <span class="box_dis">-20%</span>
                    <div class="box_img">
                        <img src="{{asset('website/dist/img/product2.png')}}">
                    </div>
                    <div class="box_desc">
                        <h3>مجموعة العناية بالبشرة</h3>
                        <p>
                            <span class="old_price">100 ريال سعودي</span>
                            <span class="new_price">70 ريال سعودي</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="wow animate__animated animate__backInLeft box-wrapper">
                <a href="{{url('single-product')}}" class="two box">
                    <span class="box_dis">-20%</span>
                    <div class="box_img">
                        <img src="{{asset('website/dist/img/product2.png')}}">
                    </div>
                    <div class="box_desc">
                        <h3>مجموعة العناية بالبشرة</h3>
                        <p>
                            <span class="old_price">100 ريال سعودي</span>
                            <span class="new_price">70 ريال سعودي</span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="wow animate__animated animate__backInUp box-wrapper">
                <a href="{{url('single-product')}}" class="one box">
                    <span class="box_dis">-20%</span>
                    <div class="box_img">
                        <img src="{{asset('website/dist/img/product2.png')}}">
                    </div>
                    <div class="box_desc">
                        <h3>مجموعة العناية بالبشرة</h3>
                        <p>
                            <span class="old_price">100 ريال سعودي</span>
                            <span class="new_price">70 ريال سعودي</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!---//////////// End offers and sale Section //////////////////------------>

<!-- ////////////////////////Start subscribe////////////////////////////////// -->
<section class="all-sections Subscribe">
    <div class="container">
        <div class="contentimgsub">
            <a href="../"><img src="{{asset('website/dist/img/favicon_white.png')}}" alt=""></a>
        </div>
        <div class="aligne-center">
            <h3 class="subscribeh3">اشترك معنا ليصلك عروضنا</h3>
            <P>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر</P>
            <form action="../">
                <div class="subdiv">
                    <input class="form-control inputsubscribe" type="email" placeholder="البريد الالكتروني">
                    <button type="submit"><i class="fas fa-arrow-left"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ///////||||||||||||||||||End subscribe|||||||||||||||||||||||||||//// -->

@endsection
@section('scripts')
<!---- like new product --->
<script>
    $(".likerr").click(function() {
        $(this).toggleClass("i_liked");
    });
</script>
@endsection