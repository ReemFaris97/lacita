@extends('site.layout')
@section('title' , 'La Cita || Forgot password')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| Start Sign In Section |||||||||||||||||||| -->
<div class="login_inner">
    <div class="container">
        <div class="box_outer">
            <div class="box-top">
                <a href="{{url('/')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="La Cita">
                </a>
                <a href="{{url('/')}}" class="to_site"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="form-box">
                <h2>Forgot password?</h2>
                <p class="grey_p">
                Enter your registered mobile number and we'll send you a secure code to setup a new password.
                </p>
                <form class="logForm" action="{{url('confirmation-code')}}">
                  <div class="form-group">
                     <label>mobile number</label>
                     <input type="nnumber" class="form-control">
                  </div>
                  <div class="have_ac m-b-15">
                         <a href="{{url('sign-in')}}">Back to login</a>
                </div>
                  <button type="submit" class="big_btn">reset Password</button>
               </form>
            </div>
            <div class="form-box">
                <h2>Login for professionals</h2>
                <div class="have_ac">
                    <p>To access your partner account please go to the
                         <a href="#">business login page</a>
                    </p>
                </div>
            </div>
            <div class="copyright">
            &copy; <span id="currentYear"></span>La Cita.com SV Ltd
        </div>
        </div>
    </div>
</div>
<!-- /////////////////////|||||||||||End Sign In Section |||||||||||||||||||| -->
@endsection
@section('scripts')
@endsection

