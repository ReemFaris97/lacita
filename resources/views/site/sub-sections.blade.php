@extends('site.layout')
@section('title' , 'حوافل || العناية بالبشرة')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work subsection">
   <div class="single-workdiv">
      <h3 class="titlebread" > العناية بالبشرة</h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('categories')}}">الاقسام</a>  /  <a href="{{url('sub-sections')}}"> العناية بالبشرة </a></p>
   </div>
   <img class="absimgbread" alt="" src="{{asset('website/dist/img/Layer_1.png')}}">
   <div id='wrapper' class="wrapper">
      <div class="bubble small"></div>
      <div class="bubble s-medium"></div>
      <div class="bubble medium"></div>
      <div class="bubble large"></div>
      <div class="bubble small-l"></div>
   </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////// |||||||||||||||||||| breadcrumbs|||||||||||||||||||| ///////// -->
<section class="all-sections seccateg">
   <div class="container">
      <div class="row">
         <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
            <div class="department">
               <div class="bigdivcont">
                  <div class="smlldivcont">
                     <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                  </div>
               </div>
               <div class="divcontp">
                  <a class="categoryhref" href="{{url('products')}}">العناية بالبشرة</a>
                  <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
               </div>
            </div>
         </div>
         <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
            <div class="department">
               <div class="bigdivcont">
                  <div class="smlldivcont">
                     <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                  </div>
               </div>
               <div class="divcontp">
                  <a class="categoryhref" href="{{url('products')}}">العناية بالبشرة</a>
                  <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- ////////////////////////send subscribe////////////////////////////////// -->
<section class="all-sections Subscribe">
   <div class="container">
      <div class="contentimgsub">
         <a href="../"><img src="{{asset('website/dist/img/favicon_white.png')}}" alt=""></a>
      </div>
      <div class="aligne-center">
         <h3 class="subscribeh3">اشترك معنا ليصلك عروضنا</h3>
         <P>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر</P>
         <form action="">
            <div class="subdiv">
               <input class="form-control inputsubscribe" type="email" placeholder="البريد الالكتروني">
               <button><i class="fas fa-arrow-left"></i></button>
            </div>
         </form>
      </div>
   </div>
</section>
<!-- ///////||||||||||||||||||end breadCrumbs|||||||||||||||||||||||||||//// -->
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
@endsection
