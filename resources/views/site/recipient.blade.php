@extends('site.layout')
@section('title' , 'La Cita || Choose a recipient')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/payment.css')}}">
<style>
    body {
        padding-bottom: 70px !important;
    }
</style>
@endsection

@section('content')

<!------- Start Steps Header Section -------->
<section class="step_hdr">
    <div class="container">
        <div class="step_flex">
            <div>
                <a href="javascript:history.back()" class="to_site"><i class="fas fa-arrow-left"></i></a>
                <div>
                    <p>Step 3 of 4</p>
                    <h3>Choose a recipient</h3>
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
                    <!------ Select Staff -------->
                <ul class="rv_inner">
                  <li>
                     <a href="{{url('payment_method')}}" class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/user-profile.png')}}" alt="RF" class="person">
                           <div>
                              <h3>A treat for me</h3>
                           </div>
                        </div>
                        <h4>
                           <b class="to_person"><i class="fas fa-chevron-right"></i></b>
                        </h4>
                     </a>
                  </li>
                  <li>
                     <a href="{{url('print_gift')}}" class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/printer.png')}}" alt="RF" class="person">
                           <div>
                              <h3>Print as gift</h3>
                           </div>
                        </div>
                        <h4>
                           <b class="to_person"><i class="fas fa-chevron-right"></i></b>
                        </h4>
                     </a>
                  </li>
                  <li>
                     <a href="{{url('email_gift')}}" class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/email.png')}}" alt="RF" class="person">
                           <div>
                              <h3>Email as a gift</h3>
                           </div>
                        </div>
                        <h4>
                           <b class="to_person"><i class="fas fa-chevron-right"></i></b>
                        </h4>
                     </a>
                  </li>
                </ul>
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

</script>
@endsection