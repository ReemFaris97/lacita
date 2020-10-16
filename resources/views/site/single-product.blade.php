@extends('site.layout')
@section('title' , 'La Cita || Single Product Name')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/custom_checkbox.css')}}">
<style>
   body {
      padding-bottom: 70px !important;
   }
</style>
@endsection
@section('content')
<!--------- Start fixed booking ------------------->
<section class="book_now">
   <div class="container">
      <div class="booking_in">
         <h4>Apple & Eve</h4>
         <div>
            <h4>
               172 services available
            </h4>
            <a href="{{url('select_service')}}" class="btn-hvr"><span class="z-span">book now</span></a>
         </div>
      </div>
   </div>
</section>
<!--------- End fixed booking ------------------->

<!--------- Start product header ------------------->
<section class="most_sec prod_hdr">
   <div class="container-fluid">
      <div class="row">
         <!--------- product details ------------------->
         <div class="col-md-4 col-sm-4 col-xs-6">
            <div class="prod_left">
               <div class="txt_featured">
                  <h3>Le Fix</h3>
                  <h5>58 Kenway Road, Earl's Court, London, England, SW5 0RA</h5>
                  <p>
                     <span class="one_star"><i class="fas fa-star"></i></span>
                     <span class="bold">4.8 Great</span>
                     <span class="grey">97 rating</span>
                  </p>
                  <a href="{{url('booking-details')}}" class="btn-hvr"><span class="z-span">book now</span></a>
               </div>
            </div>
         </div>
         <!--------- product slider ------------------->
         <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="owl-carousel owl-theme owl_product">
               <div class="card_product">
                  <!-- start like button--->
                  <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
                  <!-- end like button--->
                  <a class="img_product" data-fancybox="gallery" href="{{asset('website/dist/img/category1.jpg')}}">
                     <img src="{{asset('website/dist/img/category1.jpg')}}">
                  </a>
               </div>
               <div class="card_product">
                  <!-- start like button--->
                  <button type="button" class="likerr i_liked"><i class="fas fa-heart"></i></button>
                  <!-- end like button--->
                  <a class="img_product" data-fancybox="gallery" href="{{asset('website/dist/img/category2.jpg')}}">
                     <img src="{{asset('website/dist/img/category2.jpg')}}">
                  </a>
               </div>
               <div class="card_product">
                  <!-- start like button--->
                  <button type="button" class="likerr"><i class="fas fa-heart"></i></button>
                  <!-- end like button--->
                  <a class="img_product" data-fancybox="gallery" href="{{asset('website/dist/img/category3.jpg')}}">
                     <img src="{{asset('website/dist/img/category3.jpg')}}">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--------- End product header ------------------->

<!--------- Start product About ------------------->
<section class="most_sec prod_about">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="about_left">
               <div class="head-title">
                  <h2>About Apple & Eve</h2>
               </div>
               <ul>
                  <li><span><i class="far fa-lightbulb"></i></span>Instant confirmation</li>
                  <li><span><i class="fas fa-venus-mars"></i></span>Unisex</li>
                  <li><span><i class="far fa-money-bill-alt"></i></span>Pay by app</li>
               </ul>
               <p>
                  Our beauty salon has been making customers feel good from the inside out since 2001. Apple & Eve's owner Jacquie Esparza combines 24 years of beauty and spa experience with the warmth of her Chilean heritage to bring you a nourishing experience in the relaxing atmosphere of our boutique beauty spa in Earl’s Court, London. Our professional beauty treatments range from Decléor facials, massages and Lycon waxing to high-tech laser hair removal, electrolysis and endermologie treatments for smooth and supple skin. Step inside for a manicure, pedicure or microdermabrasion facial and focus on yourself.
               </p>
            </div>
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="about_right">
               <div class="head-title">
                  <h2>Location</h2>
               </div>
               <div class="loc">
                  <p>
                     58 Kenway Road, Earl's Court, London, England, SW5 0RA
                  </p>
                  <a href="{{url('search_map')}}">
                     <img src="{{asset('website/dist/img/marker1.png')}}">
                  </a>
               </div>
               <div class="timing">
                  <button class="filter-one" type="button">
                     <p>
                        <span><i class="far fa-clock"></i></span>
                        Open now 10.00am - 7:00pm
                     </p>
                     <span class="slide_d"><i class="fas fa-angle-down"></i></span>
                  </button>
                  <div class="filter-two">
                     <ul>
                        <li class="active">
                           <p>Monday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                        <li>
                           <p>Tuesday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                        <li>
                           <p>Wednesday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                        <li>
                           <p>Thursday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                        <li>
                           <p>Friday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                        <li>
                           <p>Saturday</p>
                           <p>10:00am - 7:00pm</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--------- End product About ------------------->


<!--------- Start Vouchers ------------------->
<section class="most_sec vouchers">
   <div class="container">
      <div class="head-title">
         <h2>Vouchers</h2>
      </div>
      <div class="vouchers_scroll">
         <a href="{{url('select_voucher')}}" class="voucher1">
            <div class="voucher1_in">
               <div class="voucher_title">
                  <p>Voucher value</p>
                  <b>£79</b>
               </div>
               <div class="voucher_body">
                  <div class="voucher_left">
                     <b>£79</b>
                     <p>Redeem on all services</p>
                  </div>
                  <div class="voucher_right">
                     <b>£79</b>
                  </div>
               </div>
            </div>
         </a>
         <a href="{{url('select_voucher')}}" class="voucher1">
            <div class="voucher1_in">
               <div class="voucher_title">
                  <p>Voucher value</p>
                  <b>£79</b>
               </div>
               <div class="voucher_body">
                  <div class="voucher_left">
                     <b>£79</b>
                     <p>Redeem on all services</p>
                  </div>
                  <div class="voucher_right">
                     <b>£79</b>
                  </div>
               </div>
            </div>
         </a>
         <a href="{{url('select_voucher')}}" class="voucher1">
            <div class="voucher1_in">
               <div class="voucher_title">
                  <p>Voucher value</p>
                  <b>£79</b>
               </div>
               <div class="voucher_body">
                  <div class="voucher_left">
                     <b>£79</b>
                     <p>Redeem on all services</p>
                  </div>
                  <div class="voucher_right">
                     <b>£79</b>
                  </div>
               </div>
            </div>
         </a>
      </div>
   </div>
</section>
<!--------- End Vouchers ------------------->

<!--------- Start product services ------------------->
<section class="most_sec">
   <div class="container">
      <div class="head-title">
         <h2>Services</h2>
      </div>
      <div class="prod_servs">
         <div class="row">
            <!------ nav tabs -------->
            <div class="col-md-3 col-sm-4 col-xs-12">
               <ul class="nav nav-pills">
                  <li class="nav-li active"><a data-toggle="pill" href="#home">Home<span class="badge">4</span></a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu1">Menu 1<span class="badge">4</span></a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu2">Menu 2<span class="badge">4</span></a></li>
                  <li class="nav-li"><a data-toggle="pill" href="#menu3">Menu 3<span class="badge">4</span></a></li>
               </ul>


            </div>
            <!------ tabs content -------->
            <div class="col-md-9 col-sm-8 col-xs-12">
               <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
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
         </div>
      </div>
   </div>
</section>
<!--------- End product services ------------------->

<!--------- Start book with staff ------------------->
<section class="most_sec">
   <div class="container">
      <div class="head-title">
         <h2>book with staff</h2>
      </div>
      <div class="staff">
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.png')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.jpg')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.png')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.jpg')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.png')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
         <a class="staff_cd" href="{{url('select_staff_services')}}">
            <div class="stf_img">
               <img src="{{asset('website/dist/img/user.jpg')}}" alt="RF">
            </div>
            <div class="stf_name">
               <p>Reem Faris</p>
            </div>
            <div class="stf_vote">
               <span><i class="fas fa-star"></i>5.0</span>
            </div>
         </a>
      </div>
   </div>
</section>
<!--------- End book with staff ------------------->

<!---//////////// Start Reviews Section //////////////////------------>
<section class="most_sec">
   <div class="container">
      <div class="head-title">
         <h2>Reviews</h2>
      </div>
      <div class="reviews">
         <div class="row">
            <!---- review_check ---->
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-0 hidden-xs">
               <div class="review_check">
                  <div class="lg_stars">
                     <h3><i class="fas fa-star"></i></h3>
                     <h3><i class="fas fa-star"></i></h3>
                     <h3><i class="fas fa-star"></i></h3>
                     <h3><i class="fas fa-star"></i></h3>
                     <h3><i class="fas fa-star"></i></h3>
                  </div>
                  <p>
                     <span class="bold">4.9 Great</span>
                     <span class="grey">22 rating</span>
                  </p>
                  <h4>Filter by rating</h4>
                  <ul class="rate_filter">
                     <li>
                        <a href="#">
                           <input type="checkbox" id="label1" checked>
                           <label for="label1">
                              <ul>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    <span class="sr-only">100% Complete</span>
                                 </div>
                              </div>
                              <b>20</b>
                           </label>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <input type="checkbox" id="label2">
                           <label for="label2">
                              <ul>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                    <span class="sr-only">20% Complete</span>
                                 </div>
                              </div>
                              <b>2</b>
                           </label>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <input type="checkbox" id="label3" checked>
                           <label for="label3">
                              <ul>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    <span class="sr-only">50% Complete</span>
                                 </div>
                              </div>
                              <b>10</b>
                           </label>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <input type="checkbox" id="label4">
                           <label for="label4">
                              <ul>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class="active"><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                                 <li class=""><i class="fas fa-star"></i></li>
                              </ul>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    <span class="sr-only">40% Complete</span>
                                 </div>
                              </div>
                              <b>4</b>
                           </label>
                        </a>
                     </li>
                  </ul>
               </div>

            </div>

            <!---- review_content ---->
            <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
               <ul class="rv_inner">
                  <li>
                     <div class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/user.jpg')}}" alt="RF" class="person">
                           <div>
                              <h3>Reem Faris</h3>
                              <p>Oct 3, 2020</p>
                           </div>
                        </div>
                        <h4>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                        </h4>
                     </div>
                     <h3>Amazing wax and excellent service</h3>
                  </li>
                  <li>
                     <div class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/user.png')}}" alt="RF" class="person">
                           <div>
                              <h3>Reem Faris</h3>
                              <p>Oct 3, 2020</p>
                           </div>
                        </div>
                        <h4>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                        </h4>
                     </div>
                     <h3>Amazing wax and excellent service</h3>
                  </li>
                  <li>
                     <div class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/user.jpg')}}" alt="RF" class="person">
                           <div>
                              <h3>Reem Faris</h3>
                              <p>Oct 3, 2020</p>
                           </div>
                        </div>
                        <h4>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                        </h4>
                     </div>
                     <h3>Amazing wax and excellent service</h3>
                  </li>
                  <li>
                     <div class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/user.png')}}" alt="RF" class="person">
                           <div>
                              <h3>Reem Faris</h3>
                              <p>Oct 3, 2020</p>
                           </div>
                        </div>
                        <h4>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                           <span class="active"><i class="fas fa-star"></i></span>
                        </h4>
                     </div>
                     <h3>Amazing wax and excellent service</h3>
                  </li>
               </ul>
            </div>

         </div>
      </div>
   </div>
</section>
<!---//////////// End Reviews Section //////////////////------------>

<!---//////////// Start Related Products Section //////////////////------------>
<section class="featured_sec related_sec">
   <div class="container">
      <div class="head-title">
         <h2>Venues near Apple & Eve<a href="{{url('categories')}}" class="view_more"><i class="fas fa-long-arrow-alt-right"></i></a></h2>
      </div>
      <div class="allProducts">
         <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6">
               <div class="outer_card animate__fadeInUp animate__animated wow">
                  <a class="card_featured" href="{{url('products')}}">
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
                  <a class="card_featured" href="{{url('products')}}">
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
                  <a class="card_featured" href="{{url('products')}}">
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
                  <a class="card_featured" href="{{url('products')}}">
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
         </div>
      </div>
   </div>
</section>
<!---//////////// End Related Products Section //////////////////------------>

@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('website/dist/js/owl.carousel.min.js')}}"></script>
<script>
   $('.owl_product').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: false,
      smartSpeed: 2000,
      dragEndSpeed: 2000,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      dots: true,
      nav: true,
      navText: [
         '<i class="fas fa-chevron-left"></i>',
         '<i class="fas fa-chevron-right"></i>'
      ],
      responsive: {
         0: {
            items: 1
         },
         500: {
            items: 1
         },
         768: {
            items: 1
         },
         1000: {
            items: 1
         }
      },
   });
</script>
<script>
   $(".likerr").click(function() {
      $(this).toggleClass("i_liked");
   });
</script>
<script>
   /*** Work Time Dropdown **/
   $(".filter-two").slideUp();
   $(".filter-one").click(function() {
      $(this).next().slideDown(500);
      $(".filter-two").not($(this).next()).slideUp(500);
   });

   /** Fixed Book Now **/
   $(window).scroll(function() {
      var st = $(window).scrollTop();
      if (st > 40) {
         $(".book_now").addClass('fixed_book');

      } else {
         $(".book_now").removeClass('fixed_book');

      }
   });

   /******add to cart button  *********/
   $(".to_cart").click(function() {
      $(this).toggleClass("added_cart");
   });
</script>
@endsection