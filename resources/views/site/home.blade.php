@extends('site.layout')
@section('title' , 'La Cita || الرئيسية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
@endsection
@section('content')
<!---//////////// Start Header //////////////////------------>
<header class="my-header">
    <img src="{{asset('website/dist/img/head2.svg')}}" class="wow animate__animated animate__slideInRight">
    <div class="head-txt">
        <h3 class="wow animate__animated animate__fadeInDownBig">Instantly book salons and spas nearby</h3>
        <a href="{{url('categories')}}" class="btn-hvr btn-flex wow animate__animated animate__fadeInLeft">
            <span class="btn-icon"><i class="fas fa-search"></i></span>
            <span class="z-span"> Discover venues near me </span>
        </a>
    </div>
</header>
<!---//////////// End header //////////////////------------>

<!---//////////// Start Categories Section //////////////////------------>
<section class="categories-r">
    <div class="container">
        <div class="head-title">
            <h2>Top categories in London</h2>
        </div>
        <div class="owl-carousel owl-theme owl_categ">
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category1.jpg')}}"></div>
                    <div class="txt_categ"><p>Beauty Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category2.jpg')}}"></div>
                    <div class="txt_categ"><p>Hair Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category3.jpg')}}"></div>
                    <div class="txt_categ"><p>Nail Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category4.jpg')}}"></div>
                    <div class="txt_categ"><p>Eyebrows & Lashes</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category5.jpg')}}"></div>
                    <div class="txt_categ"><p>Barbershop</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category6.jpg')}}"></div>
                    <div class="txt_categ"><p>Massage</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category7.jpg')}}"></div>
                    <div class="txt_categ"><p>Therapy Center</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category8.jpg')}}"></div>
                    <div class="txt_categ"><p>Gym & Fitness</p></div>
                </a>
        </div>
    </div>
</section>
<!---//////////// End Categories Section //////////////////------------>

<!---//////////// Start Categories Section //////////////////------------>
<section class="categories-r">
    <div class="container">
        <div class="head-title">
            <h2>Featured venues in London</h2>
        </div>
        <div class="owl-carousel owl-theme owl_categ">
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category1.jpg')}}"></div>
                    <div class="txt_categ"><p>Beauty Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category2.jpg')}}"></div>
                    <div class="txt_categ"><p>Hair Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category3.jpg')}}"></div>
                    <div class="txt_categ"><p>Nail Salon</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category4.jpg')}}"></div>
                    <div class="txt_categ"><p>Eyebrows & Lashes</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category5.jpg')}}"></div>
                    <div class="txt_categ"><p>Barbershop</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category6.jpg')}}"></div>
                    <div class="txt_categ"><p>Massage</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category7.jpg')}}"></div>
                    <div class="txt_categ"><p>Therapy Center</p></div>
                </a>
                <a class="card_categ" href="{{url('sub-sections')}}">
                    <div class="img_categ"><img src="{{asset('website/dist/img/category8.jpg')}}"></div>
                    <div class="txt_categ"><p>Gym & Fitness</p></div>
                </a>
        </div>
    </div>
</section>
<!---//////////// End Categories Section //////////////////------------>

@endsection
@section('scripts')
<script src="{{asset('website/dist/js/owl.carousel.min.js')}}"></script>
<!------- categories owl --------->
<script>
    $('.owl_categ').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: false,
            smartSpeed: 2000,
            dragEndSpeed: 2000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            dots: false,
            nav: true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 2
                },
                500: {
                    items: 3
                },
                768: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
</script>
<!---- like new product --->
<script>
    $(".likerr").click(function() {
        $(this).toggleClass("i_liked");
    });
</script>
@endsection