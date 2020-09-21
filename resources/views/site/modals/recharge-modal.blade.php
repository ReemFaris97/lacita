<!------------ Start Sign In Modal ------------>
<div class="modal log_modal adrs_modal fade" id="rechargeModal" tabindex="-1" role="dialog" aria-labelledby="rechargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        <div class="modal_inner">
            <div class="form-box">
                <div class="box-right">
                    <h4>شحن الرصيد</h4>
                </div>
                <form action="{{url('my_wallet')}}" class="defaultForm">
                    <div class="form-group">
                        <label>نوع الكارت</label>
                        <select class="js-select2 form-control" title="نوع الكارت">
                            <option>كارت جديد </option>
                            <option>كارت جديد </option>
                            <option>كارت جديد </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>رقم الكارت</label>
                        <input type="number" class="form-control" required placeholder="ادخل رقم الكارت ..">
                    </div>
                    <div class="form-group">
                        <label>اسم حامل الكارت</label>
                        <input type="text" class="form-control" required placeholder="ادخل اسم حامل الكارت ..">
                    </div>
                    <div class="form-group">
                        <label>المبلغ</label>
                        <input type="number" class="form-control" required placeholder="ادخل المبلغ ..">
                    </div>
                    <div class="form-group">
                        <label>تاريخ الانتهاء</label>
                        <input type="date" class="form-control" required placeholder="ادخل تاريخ انتهاء الكارت ..">
                    </div>
                    <div class="form-group">
                        <label>الرقم السرى</label>
                        <input type="password" class="form-control" required placeholder="ادخل الرقم السرى للكارت..">
                    </div>
                    <button type="submit" class="btn-hvr" data-dismiss="modal"><p class="z-span">تأكيد</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>