@extends('site.layout')
@section('title' , 'حوافل || المحفظة')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread"> المحفظة </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('my-profile')}}">حسابى</a> / المحفظة</p>
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

<!-- /////////////////////||||||||||| start my_adress |||||||||||||||||||| -->
<section class="my_adress">
   <div class="container">
        <div class="wallet">
            <h2>الرصيد الحالى</h2>
            <h3>3000</h3>
            <p>ريال سعودى</p>
            <button class="btn-hvr" type="button" data-toggle="modal" data-target="#rechargeModal">
                <span class="z-span">شحن الرصيد</span></button>
          </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End my_adress |||||||||||||||||||| -->

@include('site.modals.recharge-modal')


@endsection

@section('scripts')
<!---- select2 init --->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
    $(document).ready(function() {
         $(".js-select2").select2();
         $('select:not(.normal)').each(function () {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            });
    });
</script>
@endsection