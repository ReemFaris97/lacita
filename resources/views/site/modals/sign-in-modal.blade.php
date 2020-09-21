<!------------ Start Sign In Modal ------------>
<div class="modal log_modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        <div class="modal_inner">
            <div class="form-box">
                <div class="box-right">
                    <a href="{{url('/')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="حوافل">
                    </a>
                    <p>
                        ليس لديك حساب ؟
                        <button type="button" class="red" data-toggle="modal" data-dismiss="modal" data-target="#signUpModal">سجل الان</button>
                    </p>
                    <h4>تسجيل الدخول</h4>
                    <h4>عبر حسابك الشخصى</h4>
                </div>
                <form action="{{url('/')}}" class="logForm" autocomplete="off">
                    <div class="form-group">
                        <!------------ NOTE ::::: remember that id > id="number_phone" i use it in script in layout.blade for local storage -------------------------------------------****-->
                        <input class="my_inpt" id="number_phone" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="number_phone"><span class="my_span">رقم الجوال</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp2" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp2"><span class="my_span">كلمة المرور</span></label>
                    </div>
                    <div class="form-group flex-r">
                          <div>
                           <!--- local storage remember me -->
                              <input type="checkbox" id="rememberMe"> <label for="rememberMe">تذكرنى؟</label>
                          </div>
                          <button class="forgot" type="button" data-toggle="modal" data-target="#forgotPassModal" data-dismiss="modal">نسيت كلمة المرور ؟</button>
                    </div>
                    <button type="submit" class="btn-hvr" data-dismiss="modal"><p class="z-span">تسجيل الدخول</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>