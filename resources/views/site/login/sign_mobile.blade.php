@extends('site.layout')
@section('title' , 'Fresha || Sign Up')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
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
                <h2>Sign up to book</h2>
                <form class="logForm" action="{{url('/')}}">
                    <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>first name</label>
                            <input type="text" class="form-control" placeholder="Your first name">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>last name</label>
                            <input type="text" class="form-control" placeholder="Your last name">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>mobile number</label>
                            <input type="number" class="form-control">
                            <div class="slct_n">
                            <select class="select-2">
                                <option>+20</option>
                                <option>+966</option>
                                <option>+20</option>
                                <option>+966</option>
                                <option>+20</option>
                                <option>+966</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" id="txtPassword" class="form-control" placeholder="create a password">
                        <button type="button" id="btnToggle" class="toggle"><i class="fas fa-eye"></i></button>
                    </div>
                    </div>
                    <div class="col-xs-12">
                    <div class="m-b-15">
                        <!--- local storage remember me -->
                        <input type="checkbox" id="rememberMe"> <label for="rememberMe">
                            I agree to the <a href="{{url('privacy')}}" class="forgot">privacy policy</a> website terms and 
                            <a href="{{url('polices_rules')}}" class="forgot">booking terms</a>
                        </label>
                    </div>
                    </div>
                    </div>

                    <button type="submit" href="{{url('/')}}" class="big_btn">sign up</button>
                </form>
                <div class="have_ac">
                    <p>Already have an account?</p>
                    <a href="{{url('sign-in')}}"> log In now </a>
                </div>
            </div>
            <div class="form-box">
                <h2>Become a partner</h2>
                <div class="have_ac">
                    <p>Manage your business with Fresha by
                        <a href="#"> signing up as a professional </a>
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
<!----select 2---->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
            $(document).ready(function () {
                $('.select-2').select2();
            })
        </script>
  <!-----show password--->
  <script>
  let passwordInput = document.getElementById('txtPassword'),
    toggle = document.getElementById('btnToggle'),
    icon =  document.getElementById('eyeIcon');

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    icon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = 'password';
    icon.classList.remove("fa-eye-slash");
  }
}
toggle.addEventListener('click', togglePassword, false);
passwordInput.addEventListener('keyup', checkInput, false);
</script>
@endsection