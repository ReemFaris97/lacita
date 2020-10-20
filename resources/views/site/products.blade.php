@extends('site.layout')
@section('title' , 'La Cita || Sub Categories')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| Start Breadcrumbs |||||||||||||||||||| -->
<section class="bread_crumbs">
   <div class="container">
      <div class="head-title">
         <h4 class="srch_city"><a href="{{url('single-product')}}">london</a> .
            Beauty Salon</h4>
         <h2>Top Featured Venues</h2>
      </div>
   </div>
</section>
<!-- /////////////////////||||||||||| End Breadcrumbs |||||||||||||||||||| -->
<section class="about">
   <div class="container">
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
      <div class="flex-r">
         <div class="head-title">
            <h2>Featured venues</h2>
         </div>
         <div class="show_map">
         <span class="switch">
            <input type="checkbox" class="switch" id="switch-id">
            <label for="switch-id">Show map</label>
         </span>
         </div>
      </div>
      <div class="row reverse_xs">
         <div class="col-xs-12 search_div">
            <div class="allsingle-product">
            <div class="allProducts">
               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
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
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="outer_card animate__fadeInUp animate__animated wow">
                        <!-- start like button--->
                        <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
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
            </div>
         </div>
         <div class="map_div">
            <div id="map_search"></div>
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
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->



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
<!------------- map-------------->
<script>
   $(".map_search").hide();
   $(function () {
        $("#switch-id").change(function () {
            if ($(this).is(":checked")) {
                $(".map_search").show().toggleClass("col-md-8 col-sm-6 col-xs-12");
                $(".search_div").toggleClass("col-md-4 col-sm-6 col-xs-12 custom_cols");
                $(".reverse_xs").toggleClass("reverse_nw");
            } else {
                $(".map_search").hide().toggleClass("col-md-8 col-sm-6 col-xs-12");
                $(".search_div").toggleClass("col-md-4 col-sm-6 col-xs-12 custom_cols");
                $(".reverse_xs").toggleClass("reverse_nw");
            }
        });
    });
</script>
<script src="{{asset('website/dist/js/map_search.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiOgBoR0bz-6mj23O0Wmk1CScy41joFMY&callback=initMap"></script>
@endsection