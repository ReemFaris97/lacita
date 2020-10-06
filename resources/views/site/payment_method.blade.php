@extends('site.layout')
@section('title' , 'La Cita || Select Voucher')
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
                <a href="{{url('recipient')}}" class="btn-hvr"><span class="z-span">Pay now</span></a>
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
                    <h3>Review and Checkout</h3>
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
                    <h2>Payment method</h2>
                    <h5>Your card will be charged straight away</h5>
                    <div class="login_inner">
                        <div class="form-box">
                            <form class="logForm" action="{{url('/')}}">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Card holder full name</label>
                                            <input type="text" class="form-control" placeholder="Add Card holder full name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Card number</label>
                                            <input type="number" class="form-control" placeholder="Credit or debit Card number">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Expiry date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>CVV</label>
                                            <input type="number" class="form-control" placeholder="123">
                                        </div>
                                    </div>
                                </div>
                                <p class="visa">Pay securely with<img src="{{asset('website/dist/img/visa.png')}}" alt="visa"></p>
                                <button type="submit" class="big_btn">Pay Now</button>
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

    /**********add to cart button ********/
    $(".to_cart").click(function() {
        $(this).toggleClass("added_cart");
    });
</script>
<!-- plus & minus quantity-->
<script>
    $(window).load(function() {
        $(".quantity").trigger('change');
    });
    $(document).ready(function() {
        $(".number-input button").on('click', function() {
            $(this).siblings('.quantity').trigger('change');
        })
        $(".quantity").each(function() {
            $(this).on('change', function() {
                var quantity = Number($(this).val());
                var unitPrice = Number($(".current_price").text());
                var singleTotal = quantity * unitPrice;
                $("#totalss").html(singleTotal.toFixed(2));
            });
        });
    });
</script>
@endsection