@extends('site.layout')
@section('title' , 'حوافل || الحجوزات ')
@section('styles')
<!-- special for this page -->
<!-- for timepiker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/a-sass.css')}}">
<!-- end sppecial for this page -->
@endsection
@section('content')
<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="all-sections secall secnopading">
   <div class="container containeredit">
      <div class="row rowflexx bacwhite">
         <div class="col-md-3 customizer accordionaaa borderleft">
            <a class="customizer-toggle" href="javascript:void(0)">
            <i class="fas fa-cog "></i>
            </a>
            <div class="customescroll">
               <div class="flexfiltter">
                  <b>فلتر</b>
                  <b>مسح</b>
               </div>
               <div id="accordion">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           التصنيفات
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body card-bodyaa">
                           <a class="asideactive"> شاليهات <span>(25)</span></a>
                           <a> حمام سباحة <span>(100)</span></a>
                           <a> شقق <span>(25)</span></a>
                           <a> محلات <span>(25)</span></a>
                           <a> عمارات <span>(10)</span></a>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           تاريخ الوصول
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body card-bodytime">
                           <div id="datepicker"></div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           السعر
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                           <!---------- Range Slider ------------->
                           <div class="price">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div id="slider-range"></div>
                                 </div>
                              </div>
                              <div class="row slider-labels">
                                 <div class="col-xs-6 text-right caption1">
                                    <p>الحد الأقصى:</p>
                                    <span class="price2" id="slider-range-value2"></span>
                                 </div>
                                 <div class="col-xs-6 text-left caption1">
                                    <p>الحد الأدنى:</p>
                                    <span class="price2" id="slider-range-value1"></span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <form>
                                       <input type="hidden" name="min-value" value="">
                                       <input type="hidden" name="max-value" value="">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingfour">
                        <h5 class="mb-0">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                           عدد الافراد
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                           <select name="" id="">
                              <option value="">6</option>
                              <option value="">4</option>
                              <option value="">5</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingfive">
                        <h5 class="mb-0">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                           تاريخ المغادرة
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                        <div class="card-body card-bodytime">
                           <div id="datepicker2"></div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingsex">
                        <h5 class="mb-0">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesex" aria-expanded="false" aria-controls="collapsesex">
                           المنطقة
                           <i class="fas fa-chevron-down"></i>
                           </button>
                        </h5>
                     </div>
                     <div id="collapsesex" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                        <div class="card-body">
                           <select name="" id="">
                              <option value="">المدينة</option>
                              <option value="">القصيم</option>
                              <option value="">مكة</option>
                           </select>
                           <select name="" id="">
                              <option value="">الحي</option>
                              <option value="">حي 1 </option>
                              <option value="">حي 2</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-9 clo-xs-12">
            <div class=" all-sections paddingallsec">
               <section class="secpadding">
                  <div class="relative relativebook">
                     <img class="imgoffer" src="{{asset('website/dist/img/Asset7.jpg')}}" alt="">
                     <span class="absDate">26 jun - 30 jun</span>
                     <span class="absDisc">50% خصم</span>
                  </div>
                  <div>
                     <div class="flexnamebook">
                        <div class="namehotelbook">
                           <p>فندق كمبينسكي العثمان</p>
                           <div>السعودية , القصيم</div>
                        </div>
                        <div class="contshare">
                           <div class="pulseee" data-toggle="modal" data-target="#shareModal">
                              <i class="fas fa-share-alt"></i>
                           </div>
                           <div class="heartabs heartrelative">
                              <input id="toggle-heart" type="checkbox"/>
                              <label for="toggle-heart"><i class="fas fa-heart"></i></label>
                           </div>
                           <div class="relativeZ">
                              <a href="{{url('booking-confirmation')}}" class="btn-hvr see-more">حجز</a>
                           </div>
                        </div>
                     </div>
                     <div class="flexnamebook margt10">
                        <div class="strbookname">
                           <i class="fas fa-map-marker-alt"></i>
                           <span>2 كم</span>
                           <div class="flexstar color">
                              <i class="fas fa-star evalute"></i>
                              <i class="fas fa-star evalute"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <span>255</span>
                           </div>
                        </div>
                        <div>
                           <div class="priceryel"><span>100</span><span>ريال</span></div>
                           <div class="nightprice">سعر االليلة</div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="secpadding ">
                  <div id="text" class="text preadmore " data-clamp="3" >
                     هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                  </div>
               </section>
               <section class="secpadding imgMore">
                <div class="notrow">
                  <div class="row">
                     <div class="col-md-3 col-xs-6 owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset6.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset6.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset7.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset7.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset3.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset3.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                  </div>
                </div>
               </section>
               <section class="secpadding">
                  <div id="map"> </div>
               </section>
               <section class="secpadding">
                  <div class="relative">
                     <p class="titleserv">الخدمات المتاحة</p>
                     <span>عرض الكل</span>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                     <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
                  </div>
               </section>
               <section class="secpadding sectaqeem">
                  <div class="flextitlerate">
                     <p>4.8</p>
                     <div>
                        <b>التقييم الكلي</b>
                        <div class="flexstar flexstarcolor">
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star star"></i >
                           <i class="fas fa-star star"></i>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>الغرفة</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50"
                           aria-valuemin="0" aria-valuemax="100" style="width:50%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>الخدمة</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width:70%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>المكان</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="30"
                           aria-valuemin="0" aria-valuemax="100" style="width:30%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>السعر</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width:70%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="secpadding">
                  <div class="relative">
                     <p class="titleserv"> التقييمات (20)</p>
                     <span>عرض الكل</span>
                  </div>
                  <div class="comments wow animate__fadeInUp animated">
                     <div>
                        <div class="par-date relative">
                           <div class="comment-img">
                              <img src="{{asset('website/dist/img/Asset6.jpg')}}">
                           </div>
                           <div>
                              <p class="comment-name">اسماء اسماعيل</p>
                              <div class="date">27 jun 2020 , <span>4.30pm</span></div>
                           </div>
                           <div class="rltvabstop">
                              <p>جيد 3.5</p>
                              <div class="flexstar flexstarcolor">
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star star"></i >
                                 <i class="fas fa-star star"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p class="comments-p">
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                     </p>
                  </div>
                  <div class="comments wow animate__fadeInUp animated">
                     <div>
                        <div class="par-date relative">
                           <div class="comment-img">
                              <img src="{{asset('website/dist/img/Asset6.jpg')}}">
                           </div>
                           <div>
                              <p class="comment-name">اسماء اسماعيل</p>
                              <div class="date">27 jun 2020 , <span>4.30pm</span></div>
                              <div class="rltvabstop">
                              <p>جيد 3.5</p>
                              <div class="flexstar flexstarcolor">
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star checks star"></i>
                                 <i class="fas fa-star star"></i >
                                 <i class="fas fa-star star"></i>
                              </div>
                           </div>
                           </div>

                        </div>
                     </div>
                     <p class="comments-p">
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                     </p>
                  </div>
                  <div class="col-md-12 col-xs-12">
                  </div>
                  <a class="block" href="{{url('voting')}}">
                  <div class="addComment " >
                  <i class="fa fa-plus"></i>تقييم
                </div>
                </a>
            </div>
            </section>
         </div>
      </div>
   </div>
   </div>
</section>

<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
<!-- Start Sharing Modal -->
<div class="modal fade sharingModal" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="myModal3Label" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-times"></i>
            </button>
            <h4 class="modal-title" id="myModal3Label">مشاركة كوبون الخصم على..</h4>
         </div>
         <div class="modal-body">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
               <a class="addthis_button_facebook"></a>
               <a class="addthis_button_twitter"></a>
               <a class="addthis_button_pinterest_share"></a>
               <a class="addthis_button_more"><i class="fa fa-share-alt fa-2x"></i></a>
            </div>
            <!-- AddThis Button END -->
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- /.End Sharing modal -->
@endsection
@section('scripts')
<!-- sppecial for this page -->
<script src="{{asset('website/dist/js/jquery-ui.js')}}"></script>
<script src="{{asset('website/dist/js/range-slider.js')}}"></script>
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script>
   $( function() {
     $( "#datepicker" ).datepicker();
     $( "#datepicker2" ).datepicker();
   } );
</script>
<script>
   $('#myCollapsible').collapse({
   toggle: false
   })



   $( document ).ready(function() {
   var customizer = $(".customizer")
     // Customizer toggle & close button click events  [Remove customizer code from production]
     $('.customizer-toggle').on('click', function (e) {
    /*    e.preventDefault(); */
    console.log("sduh")
       $(customizer).toggleClass('open');
     });

     });
</script>
<!---------- Sharing ------->
<script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50bd330b4fbbfeb2"></script>
<script>
   var addthis_config = {
       ui_click: true
   }
   // Do this when the AddThis API is ready
   function addthisReady(evt) {
       // Place the color of your website here.
       var websiteColor = "#749EAC";
       // This changes the color once the "addThis" buttons have been loaded
       $('.addthis_toolbox > a').find('span').css("background-color", websiteColor);
   }
   // Listen for the ready event
   addthis.addEventListener('addthis.ready', addthisReady);
   $('.addthis_toolbox > a').hover(function() {
       $('.addthis_toolbox > a').not(this).stop().fadeTo("fast", 0.3);
   }, function() {
       $('.addthis_toolbox > a').not(this).stop().fadeTo("fast", 1);
   });
</script>

<!-------------- MAp --------------->
<script>
   var lat = "26.3814513";
   var lng = "43.9956951";

     function initMap() {

         var uluru = {lat: parseFloat(lat) , lng: parseFloat(lng) };
         var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 15,
             center : uluru

         });
         var image ="{{asset('website/dist/img/location.png')}}";
         var beachMarker = new google.maps.Marker({
             position: uluru,
             map: map,
             icon: image
         });
     }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-7f4KwYdJHXqb4DFU5q341ry19VnnGg&callback=initMap"></script>
<!-- read more -->
<script>
   var text = document.getElementById("text");
   var dataClamp = text.dataset.clamp;
   var style = window.getComputedStyle(text, null).getPropertyValue('font-size');
   var fontSize = parseFloat(style) + 4;
   var readMore = document.createElement('div');
   var nextSibling = text.nextSibling;
   let isOpen = false;

   window.onload = function(){

     text.setAttribute('style', 'line-height: '+fontSize+'px');

     var textHeight = text.offsetHeight;
     var lineHeight = parseInt(text.style.lineHeight);
     var lines = textHeight / lineHeight;

     if (lines > dataClamp) {
       text.setAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء المزيد </span>";
       text.parentNode.insertBefore(readMore,text.nextSibling);

     }

   }

   function readToggle() {
       isOpen = !isOpen;
       if (isOpen) {
         readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء المزيد </span>";
         text.parentNode.insertBefore(readMore,text.nextSibling);
         text.setAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       } else {
         readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء المزيد</span>";
         text.parentNode.insertBefore(readMore,text.nextSibling);
         text.removeAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       }
   }


</script>
<!-- end sppecial for this page -->
@endsection
