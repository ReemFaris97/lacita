<!------------ Start Sign In Modal ------------>
<div class="modal log_modal adrs_modal fade" id="newAdrsModal" tabindex="-1" role="dialog" aria-labelledby="newAdrsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        <div class="modal_inner">
            <div class="form-box">
                <div class="box-right">
                    <h4>إضافة عنوان</h4>
                    
                </div>
                <form action="{{url('my_addresses')}}" class="defaultForm">
                    <div class="form-group">
                        <label>اسم العنوان</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>المدينة</label>
                        <select class="js-select2 form-control" title="المدينة">
                            <option>المدينة </option>
                            <option>قصيم </option>
                            <option>بريدة </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>المنطقة</label>
                        <select class="js-select2 form-control" title="المنطقة">
                            <option>المنطقة </option>
                            <option>قصيم </option>
                            <option>بريدة </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>الحى</label>
                        <select class="js-select2 form-control" title="الحى">
                            <option>الحى </option>
                            <option>قصيم </option>
                            <option>بريدة </option>
                        </select>
                    </div>
                    <div class="form-group">
                         <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
                        <div id="adrs_map"> </div>
                    </div>
                    <div class="form-group">
                        <label>تفاصيل العنوان</label>
                         <textarea class="form-control input-lg"></textarea>
                    </div>
                    <button type="submit" class="btn-hvr" data-dismiss="modal"><p class="z-span">حفظ</p></button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>