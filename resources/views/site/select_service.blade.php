@extends('site.layout')
@section('title' , 'La Cita || Select Service')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/payment.css')}}">
@endsection

@section('content')
<!------- Start Steps Header Section -------->
<section class="step_hdr">
    <div class="container">
        <div class="step_flex">
            <div>
                <a href="javascript:history.back()" class="to_site"><i class="fas fa-arrow-left"></i></a>
                <div>
                    <p>Step 1 of 4</p>
                    <h3>Select Service</h3>
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
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages
                    </a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings
                    </a>
                </div>

                <!------ tabs content -------->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active in" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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