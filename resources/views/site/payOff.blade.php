@extends('site.layout')
@section('title' , 'حوافل || تأكيد الدفع')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/cart.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
    <div class="single-workdiv">
        <h3 class="titlebread"> تأكيد الدفع </h3>
        <p class="breadcrum"> <a href="../">الرئيسية</a> /<a href="{{url('cart')}}">السلة</a> / تأكيد الدفع</p>
    </div>
    <img class="absimgbread" alt="" src="{{asset('website/dist/img/grass.png')}}">
    <div id="leaves">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
    </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////////////////////||||||||||| start cart |||||||||||||||||||| -->
<section class="my_cart">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="items_r">
                <form action="{{url('booking-done')}}" class="custom-radio">
                    <p>
                        <input type="radio" id="test1" name="radio-group" checked>
                        <label for="test1"><i class="fas fa-truck"></i> الدفع عند الاستلام</label>
                    </p>
                    <p>
                        <input type="radio" id="test2" name="radio-group">
                        <label for="test2"><i class="fas fa-credit-card"></i> بطاقة ائتمان</label>
                    </p>
                    <p>
                        <input type="radio" id="test3" name="radio-group">
                        <label for="test3"><i class="fas fa-dollar-sign"></i> تحويل بنكى</label>
                    </p>
                    <p>
                        <input type="radio" id="test4" name="radio-group">
                        <label for="test4"><i class="fas fa-wallet"></i> محفظتى</label>
                    </p>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="left-calc">
                    <h3>ملخص السلة</h3>
                    <!---- start copoun --->
                    <div class="copounbar">
                        <p class="paycolor"><i class="fas fa-percentage"></i> هل لديك كوبون خصم؟ <b>ادخل الكود هنا</b></p>
                        <form action="#" class="coupon-form">
                            <input type="text" name="code" placeholder="الكود">
                            <button type="submit" class="btn-hvr" type="submit">
                                <span class="z-span">تحقق</span>
                            </button>
                        </form>
                        <span class="coupon-result">هذا الكود غير صحيح</span>
                    </div>
                    <!---- End copoun --->
                    <p class="left-card">
                        <span class="rigt-span ">المجموع:</span>
                        <span class="left-span"><span id="totalss">1300</span>ر.س</span>
                    </p>
                    <p class="left-card discount">
                        <span class="rigt-span"> الخصم :<span class="coupon-perc">10</span>%</span>
                        <span class="left-span red"><span class="discount-value">45 </span> ر.س</span>
                    </p>
                    <p class="left-card discount">
                        <span class="rigt-span"> الضريبة :</span>
                        <input type="hidden" name="taxes_fees" class="hidden_taxes">
                        <span class="rigt-span"><span id="taxes" class="taxes">34 </span>ر.س</span>
                    </p>
                    <p class="left-card">
                        <span class="rigt-span">المجموع الإجمالى: </span>
                        <span class="left-span"> <span id="all-totalss">1600</span>
                            ر.س</span>
                    </p>
                    <!--- start choose address --->
                    <div class="sha7n_adrs">
                        <select class="js-select2 form-control" title="عنوان الشحن">
                            <option>الحى </option>
                            <option>قصيم </option>
                            <option>بريدة </option>
                        </select>
                        <button type="button" data-toggle="modal" data-target="#newAdrsModal" class="to_new_adrs">
                            <i class="fas fa-plus"></i>إضافة عنوان اخر
                        </button>
                    </div>
                    <!--- end choose address --->
                    <a href="{{url('booking-done')}}" class="btn-hvr submit_cart" type="submit">
                        <span class="z-span">تأكيد الدفع</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End cart |||||||||||||||||||| -->
@include('site.modals.new-adrs-modal')
@endsection
@section('scripts')
<!---- select2 init --->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".js-select2").select2();
        $('select:not(.normal)').each(function() {
            $(this).select2({
                dropdownParent: $(this).parent()
            });
        });
    });
</script>
@endsection