<!------------ add card Modal ------------>
<div class="modal log_modal fade" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="confirmCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content addcartmodal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal_inner addcardinner">
                <div class="">

                    <form action="{{url('/')}}" autocomplete="off" class="enter_code">
                    <div class="bordetopbotm">
               <p class="mountP"><span>الوحدات المتاحة</span></p>
               <div class="custom_radio ">
                  <ul class="inlineradio">
                     <li>
                        <input type="radio" id="featured-1" name="featured" checked=""><label for="featured-1">اسم الوحدة </label>
                     </li>
                     <li>
                        <input type="radio" id="featured-2" name="featured"><label for="featured-2"> اسم الوحدة  </label>
                     </li>
                     <li>
                        <input type="radio" id="featured-3" name="featured"><label for="featured-3"> اسم الوحدة  </label>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="contentupdown block">
            <p class="mountP">الكمية</p>
               <div class="number-input">
                  <div onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"> <i class="fas fa-plus"></i> </div>
                  <input class="quantity" min="0" name="quantity" value="0" type="number">
                  <div onclick="this.parentNode.querySelector('.quantity').stepDown()" class="minus"> <i class="fas fa-minus"></i> </div>
               </div>

            </div>
            <button class="btn-hvr btn-flex btnminwidth">
                    <span class="z-span">  اضافة للسلة </span>
                  </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------ End Sign In Modal ------------>
