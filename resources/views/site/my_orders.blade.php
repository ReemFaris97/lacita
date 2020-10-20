@extends('site.layout')
@section('title' , 'La Cita ||My Orders')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| start BreadCrumbs |||||||||||||||||||| -->
<section class="bread_crumbs">
    <div class="container">
        <div class="head-title">
            <h2>My Orders</h2>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End BreadCrumbs |||||||||||||||||||| -->
<!-- /////////////////////||||||||||| Start My Orders Section |||||||||||||||||||| -->
<section class="inboxx">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-li active"><a data-toggle="pill" href="#upcoming">Upcoming</a></li>
            <li class="nav-li"><a data-toggle="pill" href="#past">Past</a></li>
            <li class="nav-li"><a data-toggle="pill" href="#cancelled">Cancelled</a></li>
        </ul>
        <div class="tab-content">
            <div id="upcoming" class="tab-pane fade in active">
            <div class="allProducts">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!----- Pagination ----->
                <ul class="pagination">
                    <li class="previous"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
            </div>
            <div id="past" class="tab-pane fade">
            <div class="allProducts">
            <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!----- Pagination ----->
                <ul class="pagination">
                    <li class="previous"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
            </div>
            <div id="cancelled" class="tab-pane fade">
            <div class="allProducts">
            <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="outer_card animate__fadeInUp animate__animated wow">
                                <div class="card_featured flex_card">
                                    <a class="img_featured" href="{{url('single-product')}}">
                                        <img src="{{asset('website/dist/img/salon1.jpg')}}">
                                    </a>
                                    <div class="txt_featured">
                                        <a href="{{url('single-product')}}"><h3>Le Fix Le Fix Le Fix Le Fix</h3></a>
                                        <h5>Reservation number: 463555</h5>
                                        <h5>Date: 20/10/2020 - 7:10 PM</h5>
                                    </div>
                                    <div class="price"><p>147</p><p>SAR</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!----- Pagination ----->
                <ul class="pagination">
                    <li class="previous"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End My Orders Section |||||||||||||||||||| -->

@endsection
@section('scripts')
<!---- like new product --->
<script>
    $(".likerr").click(function() {
        $(this).toggleClass("i_liked");
    });
</script>
@endsection