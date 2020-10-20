@extends('site.layout')
@section('title' , 'La Cita || Select Time')
@section('styles')
<link rel="stylesheet"
  href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="{{asset('website/scss/login-pages.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/payment.css')}}">
@endsection

@section('content')
<!--------- Start fixed booking ------------------->
<section class="book_now fixed_book">
   <div class="container">
      <div class="booking_in">
         <h4>Apple & Eve</h4>
         <div>
            <h4>
               172 services available
            </h4>
            <a href="{{url('payment_method')}}" class="btn-hvr"><span class="z-span">book now</span></a>
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
                    <p>Step 1 of 4</p>
                    <h3>Select Time with Kira</h3>
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
                <!------ Datepicker -------->
                <div class="bg_white">
                    <h2>Choose date</h2>
                    <div class="login_inner">
                        <div class="form-box">
                            <form class="logForm" action="{{url('payment_method')}}">
                <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
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
                                <div class="emptyInfoWrapper">
                                    <p>No services selected yet</p>
                                </div>
                                <ul class="list_sc">
                                    <li>
                                            <p class="listItemText">Total</p>
                                            <p class="listItemText"><span data-qa="total-price" class="priceContainer">£0</span></p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#datetimepicker1').datetimepicker({
    defaultDate: new Date(),
    format: 'DD/MM/YYYY H:mm:ss',
    sideBySide: true
});

</script>
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
    /**********add to cart button  *********/
    $(".to_cart").click(function() {
        $(this).toggleClass("added_cart");
    });
</script>
@endsection