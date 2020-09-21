@extends('site.layout')
@section('title' , 'حوافل ||  فلتر العروض')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections  single-work">
   <div class="single-workdiv">
      <h3 class="titlebread" > فلتر العروض </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('offer')}}">العروض و الخصومات</a> </p>
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
<!-- /////// |||||||||||||||||||| breadcrumbs|||||||||||||||||||| ///////// -->
<section class="all-sections seccateg ">
   <div class="container">
      <div class="flexpagin">
         <div class="pagenum">
            <span>عدد الصفحات :</span>
            <ul class="pagination">
               <li><a href="#">1</a></li>
               <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li><a href="#">4</a></li>
               <li><a href="#">5</a></li>
            </ul>
         </div>
         <div class="filter-buttons">
            <div class="relative">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-sort-amount-down"></i>
               </button>
               <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                <div class="custom_radio">
                    <ul class="inlineradio">
                        <li>
                            <a href="{{url('public_offers')}}">الخصم العام </a>
                        </li>
                        <li>
                            <a href="{{url('offer')}}"> عرض منتجين ومنتج مجاني</a>
                        </li>
                        <li>
                            <a href="{{url('offer')}}"> عرض منتج ومنتج مجاني</a>
                        </li>
                        <li>
                            <a href="{{url('offer')}}">عرض الكمية</a>
                        </li>
                        <li>
                            <a href="{{url('offer')}}"> خصم النسبة</a>
                        </li>
                        <li>
                            <a href="{{url('categories')}}">عروض الاقسام</a>
                        </li>
                        <li>
                            <a href="#">كبونات الخصم</a>
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
            <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i>  </div>
            <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i>  </div>
            <div class="dropdown">
            </div>
         </div>
      </div>
      <!-- ------------------------ -->
      <!-- الخصم العام -->
      <!-- --------------------------- -->
      <div class="row list grid-view-filter rowoffer recents">
      <div class="col-md-4  col-sm-6 col-xs-12 parentfav listgrid list4">
            <div class="fleximgfav offerp">
               <div class="minwidimg">
                    <a href="{{url('single-product')}}">
                        <div class="fleximgwidth">
                            <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
                        </div>
                    </a>
               </div>
               <div class="descrpp">
                  <div class="divcontcolock">
                     <ul>
                        <li><span class="seconds"></span>S</li>
                        <li><span class="minutes"></span>M</li>
                        <li><span class="hours"></span>H</li>
                        <li><span class="days"></span>D</li>
                     </ul>
                  </div>
                  <a href="{{url('single-product')}}">
                     <p class="nameprodfav">مجموعة الصابون الطبيعي  </p>
                  </a>
                  <div class="discprice">
                     <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                     <img class="wow animate__animated animate__rubberBand imgsale" src="{{asset('website/dist/img/1.png')}}" alt="">
                  </div>
                  <b class="favpp">اشتري منتج من زيت الارجان واحصل علي الثاني هدية</b>
                  <b class="datedes">
                  <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                  <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname discfavv">اسم الخصم</div>
            </div>
         </div>


         <div class="col-md-4  col-sm-6 col-xs-12 parentfav listgrid list4">
            <div class="fleximgfav offerp">
               <div class="minwidimg">
                <a href="{{url('single-product')}}">
                        <div class="fleximgwidth">
                            <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
                        </div>
                    </a>
               </div>
               <div class="descrpp">
                  <div class="divcontcolock">
                     <ul>
                        <li><span class="seconds"></span>S</li>
                        <li><span class="minutes"></span>M</li>
                        <li><span class="hours"></span>H</li>
                        <li><span class="days"></span>D</li>
                     </ul>
                  </div>
                  <a href="{{url('single-product')}}">
                     <p class="nameprodfav">مجموعة الصابون الطبيعي  </p>
                  </a>
                  <div class="discprice">
                     <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                     <img class="wow animate__animated animate__rubberBand imgsale" src="{{asset('website/dist/img/1.png')}}" alt="">
                  </div>
                  <b class="favpp">اشتري منتج من زيت الارجان واحصل علي الثاني هدية</b>
                  <b class="datedes">
                  <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                  <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname discfavv">اسم الخصم</div>
            </div>
         </div>


         <div class="col-md-4  col-sm-6 col-xs-12 parentfav listgrid list4">
            <div class="fleximgfav offerp">
               <div class="minwidimg">
                <a href="{{url('single-product')}}">
                        <div class="fleximgwidth">
                            <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
                        </div>
                    </a>
               </div>
               <div class="descrpp">
                  <div class="divcontcolock">
                     <ul>
                        <li><span class="seconds"></span>S</li>
                        <li><span class="minutes"></span>M</li>
                        <li><span class="hours"></span>H</li>
                        <li><span class="days"></span>D</li>
                     </ul>
                  </div>
                  <a href="{{url('single-product')}}">
                     <p class="nameprodfav">مجموعة الصابون الطبيعي  </p>
                  </a>
                  <div class="discprice">
                     <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                     <img class="wow animate__animated animate__rubberBand imgsale" src="{{asset('website/dist/img/1.png')}}" alt="">
                  </div>
                  <b class="favpp">اشتري منتج من زيت الارجان واحصل علي الثاني هدية</b>
                  <b class="datedes">
                  <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                  <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname discfavv">اسم الخصم</div>
            </div>
         </div>


         <div class="col-md-4  col-sm-6 col-xs-12 parentfav listgrid list4">
            <div class="fleximgfav offerp">
               <div class="minwidimg">
                <a href="{{url('single-product')}}">
                        <div class="fleximgwidth">
                            <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
                        </div>
                    </a>
               </div>
               <div class="descrpp">
                  <div class="divcontcolock">
                     <ul>
                        <li><span class="seconds"></span>S</li>
                        <li><span class="minutes"></span>M</li>
                        <li><span class="hours"></span>H</li>
                        <li><span class="days"></span>D</li>
                     </ul>
                  </div>
                  <a href="{{url('single-product')}}">
                     <p class="nameprodfav">مجموعة الصابون الطبيعي  </p>
                  </a>
                  <div class="discprice">
                     <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                     <img class="wow animate__animated animate__rubberBand imgsale" src="{{asset('website/dist/img/1.png')}}" alt="">
                  </div>
                  <b class="favpp">اشتري منتج من زيت الارجان واحصل علي الثاني هدية</b>
                  <b class="datedes">
                  <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                  <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname discfavv">اسم الخصم</div>
            </div>
         </div>


         <div class="col-xs-12 mr-top-10">
            <button class="btn-hvr btn-flex btnminwidth">
            <span class="z-span"> عرض المزيد </span>
            </button>
        </div>


      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->

@include('site.modals.addcard')

@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script>
   $(".deleteaa").click(function() {
           $(this).parents(".parentfav").fadeOut(300);
           $(this).parents(".parentfav").remove(3);
       });
</script>
<script>
   const listViewButton = document.querySelector('.list-view-button');
          const gridViewButton = document.querySelector('.grid-view-button');
          const list = document.querySelector('.list.grid-view-filter');

          listViewButton.onclick = function () {
          list.classList.remove('grid-view-filter');
          list.classList.add('list-view-filter');
          $(".listgrid").addClass( "col-md-6 listgrida" );
          $(".listgrid").removeClass( "col-md-4 " );
          $(".list-view-button").addClass( "classListGrid" );
          $(".grid-view-button").removeClass( "classListGrid" );




          }

          gridViewButton.onclick = function () {
          list.classList.remove('list-view-filter');
          list.classList.add('grid-view-filter');
          $(".listgrid").addClass( "col-md-4" );
          $(".listgrid").removeClass( "col-md-6 listgrida" );
          $(".grid-view-button").addClass( "classListGrid" );
          $(".list-view-button").removeClass( "classListGrid" );


          }

</script>
<script>
   $(".likerr").click(function() {
       $(this).toggleClass("i_liked");
   });
</script>
<script>
   const second = 1000,
         minute = second * 60,
         hour = minute * 60,
         day = hour * 24;

   let countDown = new Date('Sep 30, 2020 00:00:00').getTime(),
       x = setInterval(function() {

         let now = new Date().getTime(),
             distance = countDown - now;

        $(".days").text(Math.floor(distance / (day))),
        $(".hours").text(Math.floor((distance % (day)) / (hour))),
        $(".minutes").text(Math.floor((distance % (hour)) / (minute))),
        $(".seconds").text(Math.floor((distance % (minute)) / second));



         //do something later when date is reached
         //if (distance < 0) {
         //  clearInterval(x);
         //  'IT'S MY BIRTHDAY!;
         //}

       }, second)
</script>
@endsection
