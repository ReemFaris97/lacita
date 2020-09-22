@extends('site.layout')
@section('title' , 'Fresha || Reset password')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| Start Sign In Section |||||||||||||||||||| -->
<div class="login_inner">
    <div class="container">
        <div class="box_outer">
            <div class="box-top">
                <a href="{{url('/')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="Fresha">
                </a>
                <a href="{{url('/')}}" class="to_site"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="form-box">
                <h2>Reset Your Password</h2>
                <p class="grey_p">
                   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                  </p>
                <form class="logForm" action="{{url('/')}}">
                  <div class="form-group">
                      <label>Your password</label>
                     <input type="password" placeholder="enter your password" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Re-enter Your password</label>
                     <input type="password" placeholder="enter your password" class="form-control">
                  </div>
                  <button type="submit" class="big_btn">Save</button>
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
            &copy; <span id="currentYear"></span>Fresha.com SV Ltd
        </div>
        </div>
    </div>
</div>
<!-- /////////////////////|||||||||||End Sign In Section |||||||||||||||||||| -->
@endsection
@section('scripts')
@endsection

