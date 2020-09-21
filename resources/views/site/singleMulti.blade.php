@extends('site.layout')
@section('title' , 'حوافل || مكتبة الصور والفيديوهات')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread" >  مكتبة الصور والمالتيمديا </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('multimedia')}}"> مكتبة الصور والمالتيمديا</a>  / <a href="{{url('singleMulti')}}"> تفاصيل</a> </p>
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
<!-- /////// |||||||||||||||||||| section |||||||||||||||||||| ///////// -->
<section class="all-sections">
   <div class="container">
      <div class="imgcontent imgmultisingle">
         <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
      </div>
      <div>
         <p class="titlmulti">اسم الصورة</p>
         <p class="multip">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
            هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
            هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
            هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
         </p>
      </div>
      <div class="row contentcommen">
         <div class="col-sm-6 col-xs-12">
            <p class="titlmulti">التقييمات</p>
            <div class="comments">
               <div class="comment-img">
                  <img  src="{{asset('website/dist/img/man1.jpg')}}">
                  <div class="comment-name">
                     <p >محمد ابراهيم عبدالله </p>
                     <div class="date">29/ 1/ 2019</div>
                  </div>
               </div>
               <p class="comments-p">
                  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
               </p>
            </div>
         </div>
         <div class="col-sm-6 col-xs-12 ">
            <p class="titlmulti addcomrnt">اضافة تعليق</p>
            <form class="formsinglemulti">
               <div class="">
                  <div class="form-group">
                     <textarea rows="3" type="text" class="form-control inputspn" placeholder="الرسالة"></textarea>
                  </div>
               </div>
               <div class="rating">
                  <input type="radio" name="star" id="star1" checked>
                  <label for="star1">
                  <img src="{{asset('website/dist/img/love.svg')}}" alt="Loved it" >
                  <span>Loved it</span>
                  </label>
                  <input type="radio" name="star" id="star2">
                  <label for="star2">
                  <img src="{{asset('website/dist/img/liked.svg')}}" alt="Liked it">
                  <span>Liked it</span>
                  </label>
                  <input type="radio" name="star" id="star3">
                  <label for="star3">
                  <img src="{{asset('website/dist/img/ok.svg')}}" alt="It's OK" >
                  <span>It's OK</span>
                  </label>
                  <input type="radio" name="star" id="star4">
                  <label for="star4">
                  <img src="{{asset('website/dist/img/dislike.svg')}}" alt="Disliked it">
                  <span>Disliked it</span>
                  </label>
                  <input type="radio" name="star" id="star5">
                  <label for="star5">
                  <img src="{{asset('website/dist/img/hated.svg')}}" alt="Hated it">
                  <span>Hated it</span>
                  </label>
               </div>
               <div class="aligne-center divwidthbtn">
                  <button class="btn-hvr btn-flex">
                  <span class="z-span">ارسال</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- /////// |||||||||||||||||||| end section |||||||||||||||||||| ///////// -->
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
