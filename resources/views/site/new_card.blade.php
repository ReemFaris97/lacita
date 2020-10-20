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
                    <h2>Add new card</h2>
                    <h5>Your card will be charged straight away</h5>
                <div class="login_inner">
                        <div class="form-box">
                            <form class="logForm" action="{{url('/')}}">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Card holder full name</label>
                                            <input type="text" class="form-control" placeholder="Add Card holder full name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Card number</label>
                                            <input type="number" class="form-control" placeholder="Credit or debit Card number">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Expiry date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>CVV</label>
                                            <input type="number" class="form-control" placeholder="123">
                                        </div>
                                    </div>
                                </div>
                                <p class="visa">Pay securely with<img src="{{asset('website/dist/img/visa.png')}}" alt="visa"></p>
                                <button type="submit" class="big_btn">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------- End Serivces Section -------->
@endsection

@section('scripts')
@endsection