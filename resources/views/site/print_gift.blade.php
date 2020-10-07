@extends('site.layout')
@section('title' , 'La Cita || Print as a gift')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/payment.css')}}">
<style>
    body {
        padding-bottom: 70px !important;
    }
</style>
@endsection

@section('content')
<!--------- Start fixed booking ------------------->
<section class="book_now fixed_book">
    <div class="container">
        <div class="booking_in">
            <h4>1 Voucher</h4>
            <div>
                <h4>
                    79$
                </h4>
                <a href="{{url('payment_method')}}" class="btn-hvr"><span class="z-span">Continue</span></a>
            </div>
        </div>
    </div>
</section>
<!--------- End fixed booking ------------------->

<!------- Start Steps Header Section -------->
<section class="step_hdr">
    <div class="container">
        <div class="step_flex">
            <div>
                <a href="javascript:history.back()" class="to_site"><i class="fas fa-arrow-left"></i></a>
                <div>
                    <p>Step 4 of 4</p>
                    <h3>Print as a gift</h3>
                </div>
            </div>
            <a href="{{url('single-product')}}" class="to_site"><i class="fas fa-times"></i></a>
        </div>
    </div>
</section>
<!------- End Steps Header Section -------->

<!------- Start Serivces Section -------->
<section class="my_content">
    <div class="container">
        <div class="row">
            <!----- choose services left ----->
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="bg_white">
                    <h2>Recipient's info</h2>
                    <div class="login_inner">
                        <div class="form-box">
                            <form class="logForm" action="{{url('payment_method')}}">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" class="form-control" placeholder="Your First name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Last name <span class="optional">(Optional)</span></label>
                                            <input type="text" class="form-control" placeholder="Your Last name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Personalised message <span class="optional">(Optional)</span></label>
                                            <textarea rows="3" type="text" class="form-control inputspn" placeholder="Enter Your Massage"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="blue" id="print-all">See print preview</button>
                                <button type="submit" class="btn-hvr"><span class="z-span">Continue</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!----- total right ----->
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="right_total">
                    <div class="card_inner">
                        <div class="styled_details">
                            <div class="styled_content">
                                <p class="text_st1">Apple &amp; Eve</p>
                                <p class="text_st12">58 Kenway Road, Earl's Court, London, England, SW5 0RA</p>
                            </div>
                            <a title="Apple &amp; Eve" data-qa="location-profile-avatar" class="simpleLink" href="{{url('single-product')}}">
                                <div class="styledImageWrapper">
                                    <img src="{{asset('website/dist/img/category1.jpg')}}">
                                </div>
                            </a>
                        </div>
                        <div class="content_body">
                            <div class="content_shadow">
                                <!-- <div class="emptyInfoWrapper">
                                    <p>No services selected yet</p>
                                </div> -->
                                <ul class="list_sc">
                                    <li>
                                        <p class="listItemText">Total</p>
                                        <p class="listItemText"><span data-qa="total-price" class="priceContainer"><span id="totalss"></span><span>$</span></span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------- End Serivces Section -------->


<!------- Start Printed Section Section -------->
<section class="display_print" id="myDivToPrint">
    <div class="container">
        <div class="head-title">
            <h2>Print voucher</h2>
            <div class="v_single">
                <h4>Voucher Preview</h4>
                <p>reem</p>
                <p>voucher for</p>
                <b>reem</b>
                <div class="voucher1">
                    <div class="voucher1_in">
                        <div class="voucher_title">
                            <div class="styledImageWrapper">
                                <img src="{{asset('website/dist/img/category1.jpg')}}">
                            </div>
                            <h3 class="blue">Apple & Eve</h3>
                            <p class="text_st12">58 Kenway Road, Earl's Court, London, England, SW5 0RA</p>
                        </div>
                        <div class="voucher_body">
                            <div class="voucher_left">
                                <p>Voucher value</p>
                                <b><span class="current_price">100</span> $</b>
                            </div>
                            <div class="voucher_right">
                                <p class="blue">voucher code : XXXXXXx</p>
                                <p>Redeem on all services</p>
                                <p>Valid until 6 oct 2021</p>
                                <p>For multiple-use</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------- End Printed Section Section -------->
@endsection

@section('scripts')
<script>
    /** Fixed Steps Header **/
    $(window).scroll(function() {
        var st = $(window).scrollTop();
        if (st > 40) {
            $(".step_hdr").addClass('fixed_steps');

        } else {
            $(".step_hdr").removeClass('fixed_steps');

        }
    });
</script>
<!---- print ---->
<script>
    $("#print-all").click(function() {
        let t = document.getElementById("myDivToPrint").innerHTML;
        let style = `<style></style>`;
        let win = window.open('', '', );
        win.document.write(`<html><head><title>Print voucher</title><link rel="stylesheet" href="{{asset('website/dist/css/bootstrap.min.css')}}"><link rel="stylesheet" href="{{asset('website/scss/first.css')}}"><link rel="stylesheet" href="{{asset('website/scss/payment.css')}}"><link rel="stylesheet" href="{{asset('website/dist/css/print_gift.css')}}"></head><body>${t}</body></html>`);
        win.document.close();
        win.print();
    });
</script>
@endsection