@extends('site.layout')
@section('title' , 'La Cita || Sign Up')
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
                <h2>Sign up for bookers</h2>
                <a href="{{url('sign_mobile')}}" class="big_btn"> Sign up with mobile number</a>
                <a href="www.facebook.com" target="_blank" class="big_btn btn-social btn-flex">
                    <span class="btn-icon"><i class="fab fa-facebook-f"></i></span>
                    <span>Sign up with facebook</span>
                </a>
                <div class="have_ac">
                    <p>Already have an account?</p>
                    <a href="{{url('sign-in')}}"> log In now </a>
                </div>
            </div>
            <div class="form-box">
                <h2>Become a partner</h2>
                <div class="have_ac">
                    <p>Manage your business with La Cita by
                         <a href="#"> signing up as a professional </a>
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