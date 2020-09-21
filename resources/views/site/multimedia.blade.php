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
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('multimedia')}}"> مكتبة الصور والمالتيمديا</a> </p>
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
<!-- /////// |||||||||||||||||||| section|||||||||||||||||||| ///////// -->
<section class="all-sections">
   <div class="container">
      <ul class="nav nav-tabs navmulti">
         <li class="active"><a data-toggle="tab" href="#home">صور </a></li>
         <li><a data-toggle="tab" href="#menu1">فيديوهات</a></li>
         <li><a data-toggle="tab" href="#menu2">المقالات</a></li>
      </ul>
      <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
            <div class="row">
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الصورة</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الصورة</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الصورة</p>
                     </a>
                  </div>
               </div>

               <div class="col-xs-12">
                  <button class="btn-hvr btn-flex btnminwidth">
                    <span class="z-span"> عرض المزيد </span>
                  </button>
               </div>
            </div>
         </div>
         <div id="menu1" class="tab-pane fade">
            <div class="row">
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent imgcontentvideo">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الفيديو</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent imgcontentvideo">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الفيديو</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent imgcontentvideo">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الفيديو</p>
                     </a>
                  </div>
               </div>

               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=fLHVCOLU_WI">
                           <div class="imgcontent imgcontentvideo">
                              <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                              <i class="fab fa-youtube"></i>
                           </div>
                        </a>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم الفيديو</p>
                     </a>
                  </div>
               </div>

               <div class="col-xs-12">
                  <button class="btn-hvr btn-flex btnminwidth">
                    <span class="z-span"> عرض المزيد </span>
                  </button>
               </div>
            </div>
         </div>
         <div id="menu2" class="tab-pane fade">
            <div class="row">
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <div class="imgcontent">
                           <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                           <div class="contentnameimg">
                              <img src="{{asset('website/dist/img/man1.jpg')}}" alt="">
                              <b>محمد عبدالله ابراهيم</b>
                           </div>
                        </div>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم المقال</p>
                     </a>
                  </div>
               </div>

               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <div class="imgcontent">
                           <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                           <div class="contentnameimg">
                              <img src="{{asset('website/dist/img/man1.jpg')}}" alt="">
                              <b>محمد عبدالله ابراهيم</b>
                           </div>
                        </div>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم المقال</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <div class="imgcontent">
                           <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                           <div class="contentnameimg">
                              <img src="{{asset('website/dist/img/man1.jpg')}}" alt="">
                              <b>محمد عبدالله ابراهيم</b>
                           </div>
                        </div>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم المقال</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 overhidden editmargingallery">
                  <div class="animate__fadeInUp animate__animated wow">
                     <div>
                        <div class="imgcontent">
                           <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
                           <div class="contentnameimg">
                              <img src="{{asset('website/dist/img/man1.jpg')}}" alt="">
                              <b>محمد عبدالله ابراهيم</b>
                           </div>
                        </div>
                     </div>
                     <a href="{{url('singleMulti')}}" class="imgname">
                        <p class="imgname">اسم المقال</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-12">
                  <button class="btn-hvr btn-flex btnminwidth">
                    <span class="z-span"> عرض المزيد </span>
                  </button>
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
