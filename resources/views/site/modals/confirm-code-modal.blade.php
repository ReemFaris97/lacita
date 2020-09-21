<!------------ Start Sign In Modal ------------>
<div class="modal log_modal fade" id="confirmCodeModal" tabindex="-1" role="dialog" aria-labelledby="confirmCodeModalLabel" aria-hidden="true">
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
                        <h4>ادخل كود التفعيل</h4>
                    </div>
                    <form action="{{url('/')}}" autocomplete="off" class="enter_code">
                        <div class="form-group">
                            <input maxlength='4' class="spinInput" id="inp3" type="text" pattern="\d*" autofocus required>
                        </div>
                        <button type="submit" class="btn-hvr" data-toggle="modal" data-target="#setPassModal" data-dismiss="modal">
                            <p class="z-span">متابعة</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>