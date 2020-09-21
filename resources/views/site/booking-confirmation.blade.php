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
<section class="bookingheader">
   <div class="relative relativebook">
      <img class="imgoffer" src="{{asset('website/dist/img/Asset7.jpg')}}" alt="">
      <!--  <span class="absDate">26 jun - 30 jun</span>
         <span class="absDisc">50% خصم</span> -->
   </div>
</section>
<!---//////////// Start header Search Form //////////////////------------>
<section class="search-box">
   <div class="container">
      <div class="srch-form srchedit wow animate__ animate__backInUp animated">
         <div class="width100">
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
      </div>
   </div>
</section>
<!---//////////// End header Search Form //////////////////------------>
<!-- /////////////////////||||||||||| start details booking |||||||||||||||||||| -->
<form class="" action="">
   <section class="my-services borderbttm">
      <div class="container  ">
         <div class="formhagz">
            <p class="hagztitle">تفاصيل الفندق</p>
            <div class="row">
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="usr">تاريخ الوصول</label>
                  <input type="text" class="form-control" id="datepicker" >
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">تاريخ المغادرة</label>
                  <input type="text" class="form-control" id="datepicker1" >
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">البريد الالكتروني </label>
                  <input type="email" class="form-control">
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">رقم الجوال </label>
                  <input type="number" class="form-control">
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd"> المنطقة</label>
                  <select class="form-control">
                     <option value="">مكة</option>
                     <option value="">المدينة</option>
                     <option value="">الرياض</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">المدينة </label>
                  <select class="form-control">
                     <option value="">مكة</option>
                     <option value="">القصيم</option>
                     <option value="">ابها</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">العمارة </label>
                  <select class="form-control">
                     <option value="">مكة</option>
                     <option value="">القصيم</option>
                     <option value="">ابها</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">الدور </label>
                  <select class="form-control">
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- //////////////////////////////////////// -->
   <section class="my-services payed">
      <div class="container  ">
         <div class="formhagz" action="">
            <p class="hagztitle">تفاصيل الدفع</p>
            <div class="row">
               <div class="col-md-6">
                  <label>
                     <input type="radio" name="product" class="card-input-element"  onclick="show2();" />
                     <div class=" card-input">
                        <div class="contcard">
                           دفع الكتروني
                        </div>
                        <div class="abschecked"></div>
                     </div>
                  </label>
               </div>
               <div class="col-md-6">
                  <label>
                     <input type="radio" name="product" class="card-input-element"  onclick="show1()" />
                     <div class=" card-input">
                        <div  class="contcard">
                           دفع عند الوصول
                        </div>
                        <div class="abschecked"></div>
                     </div>
                  </label>
               </div>
            </div>
            <div id="div1" class="hidee">
               <div class="radio">
                  <input id="radio-1" name="payment_way" value="visa" type="radio">
                  <label for="radio-1" class="radio-label">
                  <img src="{{asset('website/dist/img/pay.png')}}" class="master">
                  <span class="pay-span"> الدفع عن طريق المحفظة</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-2" name="payment_way" value="visa" type="radio">
                  <label for="radio-2" class="radio-label">
                  <img src="{{asset('website/dist/img/master.png')}}" class="master">
                  <span class="pay-span">الدفع عن طريق الماستر كارد</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-3" name="payment_way" value="visa" type="radio">
                  <label for="radio-3" class="radio-label">
                  <img src="{{asset('website/dist/img/visa.png')}}" class="master">
                  <span class="pay-span">الدفع  عند طريق الفيزا</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-4" name="payment_way" value="visa" type="radio">
                  <label for="radio-4" class="radio-label">
                  <img src="{{asset('website/dist/img/mada.png')}}" class="master">
                  <span class="pay-span">الدفع  عند طريق المدي</span>
                  </label>
               </div>
            </div>
            <div class="contbtnsub">
               <button type="submit" class="btn100 btnsubmit">حفظ</button>
            </div>
            <div class="flexbtnmag">
               <div class="magmo3">
                  <b>المجموع الكلي</b>
                  <b>500 ريال </b>
               </div>
               <div class="relativeZ">
                  <div  class="btn-hvr see-more" data-toggle="modal" data-target="#exampleModalCenter">تأكيد الحجز</div>
               </div>
            </div>
         </div>
      </div>
   </section>
</form>
<!-- /////////////////////||||||||||| start details booking |||||||||||||||||||| -->
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
<!-- ////////////////////////////////////////// -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body ">
            <div class="contmodel">
               <img class="imgmodal" src="{{asset('website/dist/img/done.png')}}" alt="">
               <p class="takeedp">تم تاكيد الحجز بنجاح</p>
               <p class="takeeddetail">سيتم ارسال اشعار بتفاصيل <span>الحجز</span></p>
               <p class="takeedsecond">في غضون <span>10</span> دقائق</p>
               <div class="relativeZ">
                  <a href="{{url('booking-done')}}" class="btn-hvr maxwidthbtn">الذهاب للحجز </a>
               </div>
               <div class="relativeZ">
               <a href="{{url('/')}}" class="see-more btn-hvr">الصفحة الرئيسية </a>

               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection
@section('scripts')
<!-- sppecial for this page -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
   $( function() {
     $( "#datepicker" ).datepicker();
     $( "#datepicker1" ).datepicker();
   } );
</script>
<script src="{{asset('website/dist/js/range-slider.js')}}"></script>
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
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
<!-- show and hide -->
<script>
   function show1(){
     document.getElementById('div1').style.display ='none';
   }
   function show2(){
     document.getElementById('div1').style.display = 'block';
   }
</script>
<!-- end sppecial for this page -->
@endsection
