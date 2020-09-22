@extends('site.layout')
@section('title' , 'Fresha || Sign In')
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
                <h2>Log In with mobile number</h2>
                <form class="logForm" action="{{url('/')}}">
                  <div class="form-group">
                     <label>mobile number</label>
                     <input type="text" class="form-control" placeholder="Your email address" id="number_phone">
                  </div>
                  <div class="form-group">
                     <label>password</label>
                     <input type="password" id="txtPassword" class="form-control" placeholder="Your password">
                     <button type="button" id="btnToggle" class="toggle"><i class="fas fa-eye"></i></button>
                  </div>
                  <div class="form-group flex-r">
                          <div>
                           <!--- local storage remember me -->
                              <input type="checkbox" id="rememberMe"> <label for="rememberMe">remember me</label>
                          </div>
                          <a href="{{url('forget-pass')}}" class="forgot">Forget password?</a>
                    </div>
                    
                  <button type="submit" href="{{url('/')}}" class="big_btn">Log In</button>
               </form>
                <div class="have_ac">
                    <p>Don't have a booker account?</p>
                    <a href="{{url('sign-up')}}"> sign up now </a>
                </div>
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
 <!---- local storage remember me ---->
 <script>
        const rmCheck = document.getElementById("rememberMe"),
            emailInput = document.getElementById("number_phone");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
        }

        function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
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