@extends('site.layout')
@section('title' , 'حوافل ||  المنتجات الجديدة')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections  single-work">
   <div class="single-workdiv">
      <h3 class="titlebread" >  المنتجات الجديدة </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('new_products')}}">المنتجات الجديدة</a> </p>
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



      <div class="row list list-view-filter recents">
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">مجموعة الصابون الطبيعي  </p></a>
                  <div class="discprice">
                    <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                  </div>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <b class="datedes">
                      <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                     <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname">اسم الخصم</div>
               <div class="discprecent">-20%</div>
            </div>
         </div>
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">مجموعة الصابون الطبيعي  </p></a>
                  <div class="discprice">
                    <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                  </div>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <b class="datedes">
                      <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                     <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname">اسم الخصم</div>
               <div class="discprecent">-20%</div>
            </div>
         </div>
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">مجموعة الصابون الطبيعي  </p></a>
                  <div class="discprice">
                    <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                  </div>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <b class="datedes">
                      <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                     <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname">اسم الخصم</div>
               <div class="discprecent">-20%</div>
            </div>
         </div>
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">مجموعة الصابون الطبيعي  </p></a>
                  <div class="discprice">
                    <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                  </div>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <b class="datedes">
                      <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                     <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname">اسم الخصم</div>
               <div class="discprecent">-20%</div>
            </div>
         </div>
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset5.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">مجموعة الصابون الطبيعي  </p></a>
                  <div class="discprice">
                    <b><span>100</span>  ريال سعودي </b><b><span>100</span>  ريال سعودي </b>
                  </div>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <b class="datedes">
                      <b>2-aug-2020</b> <b>22-aug-2020</b>
                  </b>
                  <div class="flex flexadd">
                     <div class="likerr"><i class="far fa-heart"></i></div>
                     <div class="addcard"  data-toggle="modal" data-target="#addCardModal">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
               <div class="discname">اسم الخصم</div>
               <div class="discprecent">-20%</div>
            </div>
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
           $(this).parents(".parentfav").fadeOut(300 ,function() {
               $(this).remove();
               });

       });
</script>
<script>
   const listViewButton = document.querySelector('.list-view-button');
          const gridViewButton = document.querySelector('.grid-view-button');
          const list = document.querySelector('.list.list-view-filter');

          listViewButton.onclick = function () {
          list.classList.remove('grid-view-filter');
          list.classList.add('list-view-filter');
          $(".listgrid").addClass( "col-md-6 listgrida" );
          $(".listgrid").removeClass( "col-md-3 " );
          $(".list-view-button").addClass( "classListGrid" );
          $(".grid-view-button").removeClass( "classListGrid" );




          }

          gridViewButton.onclick = function () {
          list.classList.remove('list-view-filter');
          list.classList.add('grid-view-filter');
          $(".listgrid").addClass( "col-md-3" );
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

@endsection
