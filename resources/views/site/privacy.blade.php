@extends('site.layout')
@section('title' , 'La Cita || Privacy Policy')
@section('styles')
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Breadcrumbs |||||||||||||||||||| -->
<section class="bread_crumbs">
    <div class="container">
        <div class="head-title">
            <h4 class="srch_city"><a href="{{url('/')}}">Home</a> .
                Privacy Policy</h4>
        </div>
    </div>
</section>
<!-- /////////////////////||||||||||| End Breadcrumbs |||||||||||||||||||| -->
<section class="about">
    <div class="container">
        <a href="{{url('/')}}" class="foot-logo">
            <img src="{{asset('website/dist/img/logo.png')}}">
        </a>
        <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
    </div>
</section>


<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')

@endsection