@extends('site.layout')
@section('title' , 'حوافل || نسيت كلمة المرور')
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
            <h4>نسيت كلمة المرور</h4>
            <h4>ادخل رقم الهاتف لإرسال كود التفعيل</h4>
         </div>
         <form action="{{url('/')}}" class="logForm" autocomplete="off">
            <div class="form-group">
               <input id="inp2" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
               <label for="inp2"><span>رقم الهاتف</span></label>
            </div>
            <button type="button" class="btn-hvr" data-toggle="modal" data-target="#codeModal">إرسال</button>
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

<!-- Modal -->
<div class="modal fade" id="codeModal" tabindex="-1" role="dialog" aria-labelledby="codeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="codeModalLabel">ادخل كود التفعيل المرسل الى هاتفك</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"> <i class="fas fa-times"></i> </span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('new-password')}}" autocomplete="off">
            <div class="form-group">
            <label for="inp3">كود التفعيل</label>
               <input maxlength='4' class="spinInput" id="inp3" type="text" pattern="\d*" autofocus required>
            </div>
      <button type="submit" class="btn-hvr">حفظ</button>
         </form>
      </div>
      
    </div>
  </div>
</div>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script>
   $(document).ready(function() {
  $('#codeModal').on('shown.bs.modal', function() {
    $('.spinInput').trigger('focus');
  });
});
</script>
@endsection