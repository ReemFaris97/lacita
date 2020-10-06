@extends('site.layout')
@section('title' , 'La Cita || Map Search')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Breadcrumbs |||||||||||||||||||| -->
<section class="bread_crumbs">
   <div class="container">
      <div class="head-title">
         <h4 class="srch_city"><a href="{{url('/')}}">Home</a> .
            Map Search</h4>
      </div>
   </div>
</section>
<!-- /////////////////////||||||||||| End Breadcrumbs |||||||||||||||||||| -->
<section class="about">
   <div class="container">
      <div id="map_search"></div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->



@endsection
@section('scripts')
<script src="{{asset('website/dist/js/map_search.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiOgBoR0bz-6mj23O0Wmk1CScy41joFMY&callback=initMap"></script>
@endsection