@extends('site.layout')
@section('title' , 'حوافل || الحساب الشخصي')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread"> الحساب الشخصي</h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> /حسابى </p>
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

<!-- /////////////////////||||||||||| start my_profile |||||||||||||||||||| -->
<section class="my_profile">
   <div class="container">
      <div class="my_info">
         <a href="{{asset('website/dist/img/user.png')}}" data-fancybox="gallery" class="user_img"> <img src="{{asset('website/dist/img/user.png')}}"> </a>
         <ul class="user_info">
            <li>
               <p>اسم المستخدم</p>
               <h4>ريم فارس</h4>
            </li>
            <li>
               <p>البريد الإلكترونى</p>
               <h4>reem@faris.com</h4>
            </li>
            <li>
               <p>رقم الجوال</p>
               <h4>+964384765</h4>
            </li>
            <li>
               <p>المدينة</p>
               <h4>السعودية - القصيم - بريدة</h4>
            </li>
         </ul>
         <div class="log_anchors flex-r">
            <button type="button" class="btn-hvr" data-toggle="modal" data-target="#resetPassModal">
               <span class="z-span">تعديل كلمة المرور </span>
            </button>
            <a href="{{url('editprofile')}}" class="btn-hvr">
               <span class="z-span">تعديل الحساب</span>
            </a>
         </div>

      </div>
   </div>
</section>
@include('site.modals.reset-pass-modal')
<!-- /////////////////////|||||||||||End my_profile |||||||||||||||||||| -->
@endsection

@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
@endsection