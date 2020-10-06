@extends('site.layout')
@section('title' , 'La Cita || Contact Us')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Breadcrumbs |||||||||||||||||||| -->
<section class="bread_crumbs">
   <div class="container">
      <div class="head-title">
         <h4 class="srch_city"><a href="{{url('/')}}">Home</a> .
            Contact Us</h4>
      </div>
   </div>
</section>
<!-- /////////////////////||||||||||| End Breadcrumbs |||||||||||||||||||| -->
<!-- /////////////////////|||||||||||Start sections |||||||||||||||||||| -->
<div id="map"></div>

<section class="address">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>Address</b>
                        <b class="regular">45 Newman Street - London</b>
                    </div>
                    <div class="contntbb">
                        <b>Mobile Number</b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>Phone Number </b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>E-mail</b>
                        <a target="_blank" href="mailto:lacita@admin.com"><b class="regular">lacita@admin.com</b></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>Address</b>
                        <b class="regular">45 Newman Street - London</b>
                    </div>
                    <div class="contntbb">
                        <b>Mobile Number</b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>Phone Number </b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b class="h">E-mail </b>
                        <a target="_blank" href="mailto:lacita@admin.com"><b class="regular">lacita@admin.com</b></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="haveadrs animate__slideInUp  animate__animated wow">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>Address</b>
                        <b class="regular">45 Newman Street - London</b>
                    </div>
                    <div class="contntbb">
                        <b>Mobile Number</b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>Phone Number </b>
                        <a target="_blank" href="tel:+999485489522"><b class="regular">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>E-mail</b>
                        <a target="_blank" href="mailto:lacita@admin.com"><b class="regular">lacita@admin.com</b></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /////////////////////////////////////////////////////////////////// -->
<section class="all-sections contactsec secall">
    <div class="contentimg">
        <img src="{{asset('website/dist/img/favicon.png')}}" alt="La cita">
    </div>
    <div class="container">
        <div class="aligne-center relative9">
            <h3 class="hMessage">contact us</h3>
            <p class="smllheader">
                It is a long established fact that a reader will be distracted by the readable content of a page
            </p>
        </div>
        <div class="formContact ">
            <form class="">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control inputspn" placeholder="Enter yourName">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control inputspn" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <input type="number" class="form-control inputspn" placeholder="Enter your Phone Number">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea rows="3" type="text" class="form-control inputspn" placeholder="Enter Your Massage"></textarea>
                        </div>
                    </div>
                </div>
                <div class="aligne-center divwidthbtn">
                    <button class="btn-hvr">
                        <span class="z-span">Send</span>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiOgBoR0bz-6mj23O0Wmk1CScy41joFMY&callback=initMap" async defer></script>

@endsection