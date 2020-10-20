@extends('site.layout')
@section('title' , 'La Cita || Select Services')
@section('styles')
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
            <a href="{{url('select_time')}}" class="btn-hvr"><span class="z-span">book now</span></a>
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
                    <p>Step 2 of 4</p>
                    <h3>Select Services</h3>
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
                <!------ nav tabs -------->
            <ul class="nav nav-pills">
                  <li class="nav-li active"><a data-toggle="pill" href="#home">Home</a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu1">Menu 1</a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu2">Menu 2</a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu3">Menu 3</a></li>
               </ul>
                <!------ tabs content -------->
                <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                        <h4>Featured</h4>
                        <ul>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="menu1">
                        <h4>Featured</h4>
                        <ul>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                        <h4>Featured</h4>
                        <ul>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="menu3">
                        <h4>Featured</h4>
                        <ul>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                            <li class="serve1">
                                <div>
                                    <button type="button" class="to_cart"><i class="fas fa-cart-plus"></i></button>
                                    <div>
                                        <h3>service 1 details</h3>
                                        <p>30 min</p>
                                    </div>
                                </div>
                                <h4>40$</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!----- total right ----->
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="right_total">
                    <div class="card_inner">
                        <div class="styled_details">
                            <div class="styled_content">
                                <p class="text_st1">Reem Faris</p>
                                <p class="text_st12">Apple & Eve, 58 Kenway Road, Earl's Court, London, England, SW5 0RA</p>
                                <a class="blue" href="{{url('select_staff')}}">Choose other staff</a>
                            </div>
                            <a title="Apple &amp; Eve" data-qa="location-profile-avatar" class="simpleLink" href="{{url('single-product')}}">
                                <div class="styledImageWrapper">
                                <img src="{{asset('website/dist/img/user.png')}}" alt="RF">
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