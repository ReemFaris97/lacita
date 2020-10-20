@extends('site.layout')
@section('title' , 'La Cita ||My favorites')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
@endsection
@section('content')
<!---//////////// Start Featured Categories Section //////////////////------------>
<section class="bread_crumbs">
    <div class="container">
        <div class="head-title">
            <h2>My favorites</h2>
        </div>
            <div class="allProducts">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="outer_card animate__fadeInUp animate__animated wow">
                    <!-- start like button--->
                    <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
                    <!-- end like button--->
                    <!--- start gender name -->
                    <span class="the_gender">women only</span>
                    <!--- end gender name -->
                    <a class="card_featured" href="{{url('sub-sections')}}">
                        <div class="img_featured"><img src="{{asset('website/dist/img/salon1.jpg')}}"></div>
                        <div class="txt_featured">
                            <h3>Le Fix</h3>
                            <h5>45 Newman Street</h5>
                            <p>
                                <span class="one_star"><i class="fas fa-star"></i></span>
                                <span class="bold">4.8 Great</span>
                                <span class="grey">97 rating</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="outer_card animate__fadeInUp animate__animated wow">
                    <!-- start like button--->
                    <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
                    <!-- end like button--->
                    <!--- start gender name -->
                    <span class="the_gender">women only</span>
                    <!--- end gender name -->
                    <a class="card_featured" href="{{url('sub-sections')}}">
                        <div class="img_featured"><img src="{{asset('website/dist/img/salon1.jpg')}}"></div>
                        <div class="txt_featured">
                            <h3>Le Fix</h3>
                            <h5>45 Newman Street</h5>
                            <p>
                                <span class="one_star"><i class="fas fa-star"></i></span>
                                <span class="bold">4.8 Great</span>
                                <span class="grey">97 rating</span>
                            </p>
                            <div class="badge_f">Featured</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="outer_card animate__fadeInUp animate__animated wow">
                    <!-- start like button--->
                    <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
                    <!-- end like button--->
                    <!--- start gender name -->
                    <span class="the_gender">women only</span>
                    <!--- end gender name -->
                    <a class="card_featured" href="{{url('sub-sections')}}">
                        <div class="img_featured"><img src="{{asset('website/dist/img/salon1.jpg')}}"></div>
                        <div class="txt_featured">
                            <h3>Le Fix</h3>
                            <h5>45 Newman Street</h5>
                            <p>
                                <span class="one_star"><i class="fas fa-star"></i></span>
                                <span class="bold">4.8 Great</span>
                                <span class="grey">97 rating</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="outer_card animate__fadeInUp animate__animated wow">
                    <!-- start like button--->
                    <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
                    <!-- end like button--->
                    <!--- start gender name -->
                    <span class="the_gender">women only</span>
                    <!--- end gender name -->
                    <a class="card_featured" href="{{url('sub-sections')}}">
                        <div class="img_featured"><img src="{{asset('website/dist/img/salon1.jpg')}}"></div>
                        <div class="txt_featured">
                            <h3>Le Fix</h3>
                            <h5>45 Newman Street</h5>
                            <p>
                                <span class="one_star"><i class="fas fa-star"></i></span>
                                <span class="bold">4.8 Great</span>
                                <span class="grey">97 rating</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="outer_card animate__fadeInUp animate__animated wow">
                    <!-- start like button--->
                    <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
                    <!-- end like button--->
                    <!--- start gender name -->
                    <span class="the_gender">women only</span>
                    <!--- end gender name -->
                    <a class="card_featured" href="{{url('sub-sections')}}">
                        <div class="img_featured"><img src="{{asset('website/dist/img/salon1.jpg')}}"></div>
                        <div class="txt_featured">
                            <h3>Le Fix</h3>
                            <h5>45 Newman Street</h5>
                            <p>
                                <span class="one_star"><i class="fas fa-star"></i></span>
                                <span class="bold">4.8 Great</span>
                                <span class="grey">97 rating</span>
                            </p>
                        </div>
                    </a>
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
</section>
<!---//////////// End Featured Categories Section //////////////////------------>

@endsection
@section('scripts')
<!---- like new product --->
<script>
    $(".likerr").click(function() {
        $(this).toggleClass("i_liked");
    });
</script>
@endsection