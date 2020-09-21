<!------------ Start Sign In Modal ------------>
<div class="modal log_modal fade" id="resetPassModal" tabindex="-1" role="dialog" aria-labelledby="resetPassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        <div class="modal_inner">
            <div class="form-box">
                <div class="box-right">
                    <a href="{{url('my_profile')}}" class="login-logo"><img src="{{asset('website/dist/img/logo.png')}}" alt="حوافل">
                    </a>
                    <h4>تعديل كلمة المرور</h4>
                </div>
                <form action="{{url('my-profile')}}" class="logForm" autocomplete="off">
                <div class="form-group">
                        <input class="my_inpt" id="inp1" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp1"><span class="my_span">كلمة المرور القديمة</span></label>
                    </div>
                <div class="form-group">
                        <input class="my_inpt" id="inp1" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp1"><span class="my_span">كلمة المرور الجديدة</span></label>
                    </div>
                    <div class="form-group">
                        <input class="my_inpt" id="inp2" type="password" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp2"><span class="my_span">تأكيد كلمة المرور</span></label>
                    </div>
                    <button type="submit" class="btn-hvr" data-dismiss="modal"><p class="z-span">حفظ</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>