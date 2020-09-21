@extends('site.layout')
@section('title' , 'حوافل || تسجيل جديد')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="login-page">
   <!-- Start Flying Birds -->
   <div class="bird-container bird-container--one">
      <div class="bird bird--one"></div>
   </div>
   <div class="bird-container bird-container--two">
      <div class="bird bird--two"></div>
   </div>
   <div class="bird-container bird-container--three">
      <div class="bird bird--three"></div>
   </div>
   <div class="bird-container bird-container--four">
      <div class="bird bird--four"></div>
   </div>
   <!-- End Flying Birds -->
   <div class="container">
      <div class="form-box">
         <div class="box-right">
            <a href="{{url('/')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="حوافل">
            </a>
            <p>
               لديك حساب بالفعل ؟
               <a href="{{url('sign-in')}}" class="red">ادخل الان</a>
            </p>
            <h4>تسجيل جديد</h4>
         </div>
         <form action="{{url('/')}}" class="logForm" autocomplete="off">
            <div class="row">
               <div class="col-sm-6 col-xs-12">
                  <div class="form-group">
                     <input id="inp1" type="text" readonly onfocus="this.removeAttribute('readonly');" required>
                     <label for="inp1"><span>اسم المستخدم</span></label>
                  </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group">
                        <input id="inp2" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label for="inp2"><span>رقم الجوال</span></label>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group">
                        <input id="inp3" type="email" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label for="inp3"><span>البريد الإلكترونى</span></label>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group">
                        <input id="inp4" type="text" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label for="inp4"><span>المدينة</span></label>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group">
                        <input id="inp5" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label for="inp5"><span>كلمة المرور</span></label>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="form-group">
                        <input id="inp6" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label for="inp6"><span>تأكيد كلمة المرور</span></label>
                     </div>
                  </div>

                  <div class="col-xs-12">
                     <button type="submit" class="btn-hvr">تسجيل جديد</button>
                  </div>
               </div>
         </form>
         <div class="box-center">
            <div class="social-buttons">
               <!-- facebook  Button -->
               <a href="http://www.facebook.com" target="blank" class="social-margin">
                  <div class="social-icon facebook">
                     <i class="fab fa-facebook-f"></i>
                  </div>
               </a>
               <!-- TwitterButton -->
               <a href="http://gmail.com/" target="blank" class="social-margin">
                  <div class="social-icon gmail">
                     <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')

@endsection