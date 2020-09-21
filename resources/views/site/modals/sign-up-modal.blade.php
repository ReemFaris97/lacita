<!------------ Start Sign In Modal ------------>
<div class="modal log_modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
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
                         لديك حساب بالفعل ؟
                         <button type="button" class="red" data-toggle="modal" data-dismiss="modal" data-target="#signInModal">ادخل الان</button>
                    </p>
                    <h4>تسجيل جديد</h4>
                </div>
                <form action="{{url('my-profile')}}" class="logForm" autocomplete="off">
                    <div class="form-group">
                        <input class="my_inpt" id="inp1" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp1"><span class="my_span">رقم الجوال</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp2" type="text" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp2"><span class="my_span">الاسم</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp3" type="email" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp3"><span class="my_span">البريد الإلكترونى</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp2" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp2"><span class="my_span">كلمة المرور</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp4" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp4"><span class="my_span">تأكيد كلمة المرور</span></label>
                    </div>
                    <button type="submit" class="btn-hvr" data-dismiss="modal"><p class="z-span">تسجيل جديد</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>