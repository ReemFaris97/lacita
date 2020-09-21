@extends('site.layout')
@section('title' , 'حوافل || اسم البرودكت')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/owl.carousel.css')}}">
<!-- <link rel="stylesheet" href="http://127.0.0.1:8001/website/css/a-style.css"> -->
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////// |||||||||||||||||||| section |||||||||||||||||||| ///////// -->
<section class="all-sections  about">
   <div class="container  ">

   <p class="singleprodlink"><a href="../">الرئيسية</a> / <a href="{{url('categories')}}">الاقسام</a>  / <a href="{{url('multimedia')}}">العناية بالبشرة</a>  / <a href="{{url('multimedia')}}">منتجات</a>  / <a href="{{url('single-product')}}">تفاصيل المنتج</a>  </p>
   <div class="padingback bacWhite ">
      <div class="row">
         <div class="col-xs-12 col-md-6 ">
            <div class="product-imgs">
               <div class="slider-chose clearfix">
                  <div class="row">
                     <div class="col-xs-12 col-sm-9 leftresp">
                        <div id="sync1" class="owl-carousel owl-theme">
                           <div class="item imagee" data-hash="zero">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/product2.png')}}">
                              <img src="{{asset('website/dist/img/product2.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="one">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/product2.png')}}">
                              <img src="{{asset('website/dist/img/product2.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="two">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="three">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="four">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12  col-sm-3 leftresp">
                        <div class="img-show">
                           <a class="button secondary url active" href="#zero"><img src="{{asset('website/dist/img/product2.png')}}"></a>
                           <a class="button secondary url" href="#one"><img src="{{asset('website/dist/img/product2.png')}}"></a>
                           <a class="button secondary url" href="#two"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                           <a class="button secondary url" href="#three"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                           <a class="button secondary url" href="#four"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 align-resp">
            <div class="flexe3llan">
               <p class="product-layName"> مجموعة العناية بالبشرة </p>
            </div>
            <p class="disccolor"><span>3999 ريال</span> <span>4250 ريال</span> </p>
            <p class="p-detalies">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</p>
            <div class="bordetopbotm">
               <p class="mountP"><span>الوحدات المتاحة</span></p>
               <div class="custom_radio ">
                  <ul class="inlineradio">
                     <li>
                        <input type="radio" id="featured-1" name="featured" checked=""><label for="featured-1">اسم الوحدة </label>
                     </li>
                     <li>
                        <input type="radio" id="featured-2" name="featured"><label for="featured-2"> اسم الوحدة  </label>
                     </li>
                     <li>
                        <input type="radio" id="featured-3" name="featured"><label for="featured-3"> اسم الوحدة  </label>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="contentupdown">
               <div class="number-input">
                  <button onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"> <i class="fas fa-plus"></i> </button>
                  <input class="quantity" min="0" name="quantity" value="0" type="number">
                  <button onclick="this.parentNode.querySelector('.quantity').stepDown()" class="minus"> <i class="fas fa-minus"></i> </button>
               </div>
               <div class="flex flexadd">
                  <div class="likerr"><i class="far fa-heart"></i></div>
                  <a href="{{url('cart')}}" class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- //////////////////////////////////////////////// -->
<section class="all-sections absbottom">
   <div class="container">
      <ul class="nav nav-tabs navmulti">
         <li class="active"><a data-toggle="tab" href="#home">تفاصيل المنتج </a></li>
         <li><a data-toggle="tab" href="#menu1">التقييمات</a></li>
      </ul>
      <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
            <p class="product-layName ptitle"> التفاصيل</p>
            <p class="ptabscont">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
               هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
               هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا
            </p>
         </div>
         <div id="menu1" class="tab-pane fade">
            <div>
               <div class="tabcont">
                  <div class="row contentcommen">
                     <div class="col-sm-7 col-xs-12">
                        <p class="titlmulti">التقييمات</p>
                        <div class="flexcommentstr">
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
                            <div class="contentstr">
                                <b>جيد</b>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-sm-5 col-xs-12 ">
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
                              <span class="z-span">تقييم</span>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
<!-- ///////////|||||||||||||||||||||||||||||||||||||/////////// -->
<section class="recents all-sections">
   <div class="container">
      <p class="product-layName ptitle"> منجات ذات صلة</p>
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
<!-- ///////|||||||||||||||||||||||||||||||||||||||||/////////// -->
@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script src= "{{asset('website/dist/js/owl.carousel.min.js')}}"></script>
<script>
   /*Start Product*/
   $('#sync1').owlCarousel({
       rtl: true,
       loop: true,
       margin: 0,
       autoplay: false,
       smartSpeed: 2000,
       dragEndSpeed: 2000,
       dots: false,
       nav: true,
       navText: ["<i class='fa fa-angle-left'>", "<i class='fa fa-angle-right'>"],
       responsive: {
           0: {
               items: 1
           },
           600: {
               items: 1
           },
           1000: {
               items: 1
           }
       }
   });
   /*End Product*/
</script>
<script>
   $(".likerr").click(function() {
       $(this).toggleClass("i_liked");
   });
</script>
@endsection
