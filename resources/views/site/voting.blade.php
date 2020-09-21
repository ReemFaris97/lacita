@extends('site.layout')
@section('title' , 'حوافل || تقييم الحجز')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="my_profile">
   <div class="container">
   <div class="head-title">
            <h2>تقييم الحجز</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل</p>
        </div>
      <form action="{{url('service-single')}}" class="voting" autocomplete="off">
         <div class="row">
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <h4>تقييمك لخدمة الغرف :</h4>
                  <div class="star-rating">
                     <input type="radio" id="5-stars" name="rating" value="5" />
                     <label for="5-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="4-stars" name="rating" value="4" />
                     <label for="4-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="3-stars" name="rating" value="3" />
                     <label for="3-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="2-stars" name="rating" value="2" />
                     <label for="2-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="1-star" name="rating" value="1" />
                     <label for="1-star" class="star"><i class="fas fa-star"></i></label>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <h4>تقييمك للخدمة :</h4>
                  <div class="star-rating">
                     <input type="radio" id="5b-stars" name="rating-b" value="5-b" />
                     <label for="5b-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="4b-stars" name="rating-b" value="4-b" />
                     <label for="4b-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="3b-stars" name="rating-b" value="3-b" />
                     <label for="3b-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="2b-stars" name="rating-b" value="2-b" />
                     <label for="2b-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="1b-star" name="rating-b" value="1-b" />
                     <label for="1b-star" class="star"><i class="fas fa-star"></i></label>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <h4>تقييمك للمكان :</h4>
                  <div class="star-rating">
                     <input type="radio" id="5c-stars" name="ratin-cg" value="5-c" />
                     <label for="5c-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="4c-stars" name="rating-c" value="4-c" />
                     <label for="4c-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="3c-stars" name="rating-c" value="3-c" />
                     <label for="3c-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="2c-stars" name="rating-c" value="2-c" />
                     <label for="2c-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="1c-star" name="rating-c" value="1-c" />
                     <label for="1c-star" class="star"><i class="fas fa-star"></i></label>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  <h4>تقييمك للسعر :</h4>
                  <div class="star-rating">
                     <input type="radio" id="5d-stars" name="rating-d" value="5-d" />
                     <label for="5d-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="4d-stars" name="rating-d" value="4-d" />
                     <label for="4d-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="3d-stars" name="rating-d" value="3-d" />
                     <label for="3d-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="2d-stars" name="rating-d" value="2-d" />
                     <label for="2d-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="1d-star" name="rating-d" value="1-d" />
                     <label for="1d-star" class="star"><i class="fas fa-star"></i></label>
                  </div>
               </div>
            </div>
            <div class="col-xs-12">
               <div class="form-group">
                  <h4>تقييمك لسهولة الحجز :</h4>
                  <div class="star-rating">
                     <input type="radio" id="5e-stars" name="rating-e" value="5-e" />
                     <label for="5e-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="4e-stars" name="rating-e" value="4-e" />
                     <label for="4e-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="3e-stars" name="rating-e" value="3-e" />
                     <label for="3e-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="2e-stars" name="rating-e" value="2-e" />
                     <label for="2e-stars" class="star"><i class="fas fa-star"></i></label>
                     <input type="radio" id="1e-star" name="rating-e" value="1-e" />
                     <label for="1e-star" class="star"><i class="fas fa-star"></i></label>
                  </div>
               </div>
            </div>
            <div class="col-xs-12">
               <div class="form-group">
                  <h4>تقييمك لسهولة الحجز :</h4>
                  <textarea placeholder="تعليقك.." rows="4" cols="50" class="form-control input-lg">
                  </textarea>
               </div>
            </div>


            <div class="col-xs-12">
               <button type="submit" class="btn-hvr">حفظ</button>
            </div>
         </div>
      </form>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection

@section('scripts')
@endsection