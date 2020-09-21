@extends('site.layout')
@section('title' , 'حوافل || تسجيل الدخول')
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
            ليس لديك حساب ؟
            <a href="{{url('sign-up')}}" class="red">سجل الان</a>
         </p>
         <h4>تسجيل الدخول</h4>
         <h4>عبر حسابك الشخصى</h4>
      </div>
      <form action="{{url('/')}}" class="logForm" autocomplete="off">
         <div class="form-group">
            <input id="inp1" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
            <label for="inp1"><span>رقم الهاتف</span></label>
         </div>
         <div class="form-group">
            <input id="inp2" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
            <label for="inp2"><span>كلمة المرور</span></label>
         </div>
         <button type="submit" class="btn-hvr">تسجيل الدخول</button>
      </form>
         <div class="box-center">
         <a href="{{url('confirmation-code')}}">نسيت كلمة المرور ؟</a>
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
