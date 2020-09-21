@extends('site.layout')
@section('title' , 'حوافل || اتصل بنا')
@section('styles')

<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections single-work">
    <div class="single-workdiv">
        <h3 class="titlebread" > اتصل بنا </h3>
        <p class="breadcrum"> <a href="#">الرئيسية</a> /  <a href="{{url('contact-us')}}">اتصل بنا</a> </p>
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
<!-- ///////||||||||||||||||||end breadCrumbs|||||||||||||||||||||||||||//// -->

<div id="map"></div>

<section class="address">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>العنوان</b>
                        <b class="regular">السعودية - القصيم - طريق الملك فهد </b>
                    </div>
                    <div class="contntbb">
                        <b>رقم الهاتف</b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>الجوال </b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>البريد الالكتروني </b>
                        <a  href="mailto:webmaster@example.com">hawafel@admin.com</b></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>العنوان</b>
                        <b class="regular">السعودية - القصيم - طريق الملك فهد </b>
                    </div>
                    <div class="contntbb">
                        <b>رقم الهاتف</b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>الجوال </b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>البريد الالكتروني </b>
                        <a  href="mailto:webmaster@example.com">hawafel@admin.com</b></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>العنوان</b>
                        <b class="regular">السعودية - القصيم - طريق الملك فهد </b>
                    </div>
                    <div class="contntbb">
                        <b>رقم الهاتف</b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>الجوال </b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>البريد الالكتروني </b>
                        <a  href="mailto:webmaster@example.com">hawafel@admin.com</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////////////////////////////////////////////////// -->
<section class="all-sections contactsec secall">
    <div class="contentimg">
        <img src="{{asset('website/dist/img/favicon_white.png')}}" alt="">
    </div>
   <div class="container">
       <img class="imgfav animate__zoomIn  animate__animated wow" src="{{asset('website/dist/img/favicon_pink.png')}}" alt="">
        <div class="aligne-center relative9">
            <h3 class="hMessage"> تواصل معنا</h3>
            <p class="smllheader">نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر والطبيعة</p>
        </div>
    <div class="formContact ">
            <form class="">
                <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control inputspn" placeholder="الاسم">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                    <input type="email" class="form-control inputspn" placeholder="البريد الالكتروني">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                    <input type="number" class="form-control inputspn" placeholder="رقم الجوال">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                    <textarea rows="3" type="text" class="form-control inputspn" placeholder="الرسالة"></textarea>
                    </div>
                </div>
                </div>
               <!--  <button href="#" class="btn-hvr cartmargtop a-btn btnauto " type="submit">
                    ارسال
                </button> -->
                <div class="aligne-center divwidthbtn">
                <button  class="btn-hvr btn-flex">
                    <span class="z-span">ارسال</span>
                </button>
                </div>

            </form>




   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="https://tympanus.net/Development/TextInputEffects/js/classie.js"></script>

<script>
         // The following example creates a marker in Stockholm, Sweden using a DROP
         // animation. Clicking on the marker will toggle the animation between a BOUNCE
         // animation and no animation.



         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 8,
                 center: {
                     lat: 26.3515732,
                     lng: 45.3483186
                 }
             });
         var marker;
             marker = new google.maps.Marker({
                 map: map,
                 draggable: true,
                 animation: google.maps.Animation.DROP,
                 position: {
                     lat: 26.3515732,
                     lng: 45.3483186
                 }
             });
             marker.addListener('click', toggleBounce);
         }

         function toggleBounce() {
             if (marker.getAnimation() !== null) {
                 marker.setAnimation(null);
             } else {
                 marker.setAnimation(google.maps.Animation.BOUNCE);
             }
         }

      </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiOgBoR0bz-6mj23O0Wmk1CScy41joFMY&callback=initMap"
    async defer></script>

@endsection
