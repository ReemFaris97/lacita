@extends('site.layout')
@section('title' , 'La Cita || Products ')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Categories section |||||||||||||||||||| -->
<section class="featured_sec">
   <div class="container">
      <div class="head-title">
         <h4 class="srch_city"><a href="{{url('single-product')}}">london</a> .
         Beauty Salon</h4>
         <h2>Top Featured Venues</h2>
      </div>
      <div class="filtering">
         <select class="select-2">
            <option>Nearest</option>
            <option>top rated</option>
            <option>newest</option>
            <option>lowest price</option>
         </select>
         <select class="select-2">
            <option>Men and women</option>
            <option>women only</option>
            <option>men only</option>
         </select>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr i_liked"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon2.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>The Barbery</h3>
                     <h5>29 Webber Street</h5>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon3.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>Balance Massage & Wellness</h3>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr i_liked"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon4.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>ELP Barbershop</h3>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr i_liked"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon5.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>douce</h3>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon6.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>Karda Hair & Beauty</h3>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr i_liked"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon7.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>The Nail Lounge</h3>
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
         <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="outer_card animate__fadeInUp animate__animated wow">
               <!-- start like button--->
               <button type="button" class="likerr i_liked"><i class="far fa-heart"></i></button>
               <!-- end like button--->
               <a class="card_featured" href="{{url('single-product')}}">
                  <div class="img_featured"><img src="{{asset('website/dist/img/salon8.jpg')}}"></div>
                  <div class="txt_featured">
                     <h3>Beauty Bars</h3>
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
      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End Categories section |||||||||||||||||||| -->
@endsection
@section('scripts')
<!---- like new product --->
<script>
   $(".likerr").click(function() {
      $(this).toggleClass("i_liked");
   });
</script>
<!----select 2---->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
   $(document).ready(function() {
      $('.select-2').select2();
   })
</script>
@endsection