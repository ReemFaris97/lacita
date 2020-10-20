@extends('site.layout')
@section('title' , 'La Cita || Payment Methods')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/payment.css')}}">
<style>
    body {
        padding-bottom: 70px !important;
    }
</style>
@endsection

@section('content')

<!------- Start Steps Header Section -------->
<section class="step_hdr">
    <div class="container">
        <div class="step_flex">
            <div>
                <a href="javascript:history.back()" class="to_site"><i class="fas fa-arrow-left"></i></a>
                <div>
                    <h3>Payment Methods</h3>
                </div>
            </div>
            <a href="{{url('/')}}" class="to_site"><i class="fas fa-times"></i></a>
        </div>
    </div>
</section>
<!------- End Steps Header Section -------->

<!------- Start Serivces Section -------->
<section class="my_content">
    <div class="container">
        <div class="row">
            <!----- choose services left ----->
            <div class="col-md-push-2 col-md-8 col-xs-push-0 col-xs-12">
                <div class="bg_white">
                    <!------ Select Staff -------->
                <ul class="rv_inner">
                  <li>
                     <a href="{{url('new_card')}}" class="serve1">
                        <div>
                           <img src="{{asset('website/dist/img/credit-card.png')}}" alt="RF" class="person">
                           <div>
                              <h3>Add a new card</h3>
                           </div>
                        </div>
                        <h4>
                           <b class="to_person"><i class="fas fa-chevron-right"></i></b>
                        </h4>
                     </a>
                  </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!------- End Serivces Section -------->
@endsection

@section('scripts')
@endsection