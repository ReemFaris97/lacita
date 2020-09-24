@extends('site.layout')
@section('title' , 'Fresha || الرئيسية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
@endsection
@section('content')
<!---//////////// Start Header //////////////////------------>
<header class="my-header">
    <img src="{{asset('website/dist/img/head.png')}}">
    <div class="container head-txt">
        <p class="wow animate__animated animate__fadeInDownBig">Fresha للعناية بالبشرة</p>
        <h2>منتجات</h2>
        <h2> صنعت من</h2>
        <h3 class="wow animate__animated animate__fadeInRightBig">مكونات طبيعية للعناية ببشرتك</h3>
        <a href="{{url('categories')}}" class="btn-hvr btn-flex">
            <img src="{{asset('website/dist/img/favicon_white.png')}}">
            <span class="z-span"> تسوق الان </span>
            <span class="btn-icon"><i class="fas fa-long-arrow-alt-left"></i></span>
        </a>
    </div>
</header>
<!---//////////// End header //////////////////------------>

<!---//////////// Start Categories Section //////////////////------------>
<section class="categories-r">
    <div class="container">
        <div class="head-title">
            <div class="head-in">
                <h2>الأقسام</h2>
            </div>
            <p>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية</p>
        </div>

    </div>
</section>
<!---//////////// End Categories Section //////////////////------------>

@endsection
@section('scripts')
<!---- like new product --->
<script>
    $(".likerr").click(function() {
        $(this).toggleClass("i_liked");
    });
</script>
@endsection