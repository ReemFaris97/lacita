<!------------ Start Sign In Modal ------------>
<div class="modal log_modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
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
                    <h4>إستعادة كلمة المرور</h4>
                </div>
                <form action="{{url('/')}}" class="logForm" autocomplete="off">
                    <div class="form-group">
                        <input class="my_inpt" id="inp1" type="number" readonly onfocus="this.removeAttribute('readonly');" required>
                        <label class="my_lbl" for="inp1"><span class="my_span">رقم الجوال</span></label>
                    </div>
                    <button type="submit" class="btn-hvr" data-toggle="modal" data-target="#confirmCodeModal" data-dismiss="modal"><p class="z-span">متابعة</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>