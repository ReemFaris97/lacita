@extends('site.layout')
@section('title' , 'حوافل || تم الشحن')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/cart.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
    <div class="single-workdiv">
    <img src="{{asset('website/dist/img/logo.png')}}" class="c_imgg">
        <h3 class="titlebread">شكرا لطلبك من متجرنا</h3>
    </div>
    <img class="absimgbread" alt="" src="{{asset('website/dist/img/grass.png')}}">
    <div id="leaves">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
    </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////////////////////||||||||||| start cart |||||||||||||||||||| -->
<section class="my_cart">
    <div class="container">
        <div class="booked">
            <div class="flex-r">
               <h4>رقم الشحنة :</h4>
               <h4>23456333</h4>
             </div>
            <div class="flex-r">
               <h4>تاريخ الشحنة :</h4>
               <h4>10/9/2020</h4>
             </div>
            <div class="flex-r">
               <h4>طريقة الدفع:</h4>
               <h4>الدفع عند الاستلام</h4>
             </div>
            <div class="flex-r">
               <h4>سعر الفاتورة:</h4>
               <h4>300 ريال</h4>
             </div>
            <div class="flex-r">
               <h4>تكلفة التوصيل:</h4>
               <h4>50 ريال</h4>
             </div>
            <div class="flex-r">
               <h4>الضريبة:</h4>
               <h4>5 ريال</h4>
             </div>
            <div class="flex-r">
               <h4>إجمالى الفاتورة:</h4>
               <h4>3456 ريال</h4>
             </div>
        </div>
        <div class="order_status">
           <div class="flex-r">
              <!----------------- NOTE :: add (this_status) class to order status ----------------->
           <div class="this_status">
              <h4><i class="fas fa-check-circle"></i></h4>
              <p>قيد التجهيز</p>
           </div>
           <div>
              <h4><i class="fas fa-check-circle"></i></h4>
              <p>تم الشحن</p>
           </div>
           <div>
              <h4><i class="fas fa-check-circle"></i></h4>
              <p>تم التسليم</p>
           </div>
           </div>
        </div>
        <p class="order_timing">
           الوقت المتوقع لوصول الشحنة , الثلاثاء , 20 Aug 2020 - الخميس 22 Aug 2020
        </p>
        <div class="items_r">
        <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span>300</span><span> ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                           <p> الكمية : <span class="quantity_in">3</span></p>
                        </div>
                    </div>
        <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span>300</span><span> ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                           <p> الكمية : <span class="quantity_in">3</span></p>
                        </div>
                    </div>
        <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span>300</span><span> ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                           <p> الكمية : <span class="quantity_in">3</span></p>
                        </div>
                    </div>
        </div>
        <a href="{{url('my_orders')}}" class="btn-hvr submit_cart">
                        <span class="z-span">إلغاء الطلب</span>
                    </a>
    </div>
</section>
<!-- /////////////////////|||||||||||End cart |||||||||||||||||||| -->
@endsection
@section('scripts')
@endsection