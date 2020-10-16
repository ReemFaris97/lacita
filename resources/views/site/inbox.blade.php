@extends('site.layout')
@section('title' , 'La Cita || Notifications')
@section('styles')
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="bread_crumbs">
    <div class="container">
        <div class="head-title">
            <h2>notification</h2>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
<!-- /////////////////////||||||||||| Start  |||||||||||||||||||| -->
<section class="inboxx">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-li active"><a data-toggle="pill" href="#messages">Messages</a></li>
            <li class="nav-li"><a data-toggle="pill" href="#notifications">Notifications</a></li>
        </ul>
        <div class="tab-content">
            <div id="messages" class="tab-pane fade in active">
                <div class="notification">
                    <!-- add clas(.not-read) if isn't been read and put this title="تحديد كمقروء"-->
                    <div class="notifi1 not-read">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كغير مقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                    <!-- add clas(.not-read) if isn't been read and put this title="تحديد كمقروء"-->
                    <div class="notifi1 not-read">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كغير مقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                    <!-- add clas(.not-read) if isn't been read and put this title="تحديد كمقروء"-->
                    <div class="notifi1 not-read">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1">
                        <a href="#" class="chat1">
                        <img src="{{asset('website/dist/img/user.png')}}" class="chat_user">
                            <div class="msg_body">
                                <h4>Reem</h4>
                            <p>We left the house</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كغير مقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Chat"> <i class="fa fa-times"></i></button>
                            </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="notifications" class="tab-pane fade">
                <div class="notification">
                    <!-- add clas(.not-read) if isn't been read and put this title="تحديد كمقروء"-->
                    <div class="notifi1 not-read">
                        <a href="#">
                            <p>You saved a post</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1 not-read">
                        <a href="#">
                            <p>Saudi hotel reservation has been canceled</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1 not-read">
                        <a href="#">
                            <p>You saved a post</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1 not-read">
                        <a href="#">
                            <p>Saudi hotel reservation has been canceled</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كمقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                    <!-- and put without clas(.not-read) in the bottom of the list and put this title="تحديد كغير مقروء" -->
                    <div class="notifi1">
                        <a href="#">
                            <p>You saved a post</p>
                            <span class="time">15 Jun 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كغير مقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                    <div class="notifi1">
                        <a href="#">
                            <p>Saudi hotel reservation has been canceled</p>
                            <span class="time">28 May 2020</span>
                            <div class="controls1">
                                <button type="button" class="read-now" href="javascript:void(0)" title="تحديد كغير مقروء"><i class="fa fa-circle"></i></button>
                                <button class="close" href="javascript:void(0)" title="Delete Notification"> <i class="fa fa-times"></i></button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<!-- Notification read and unread -->
<script>
    $(".notifi1 .close").click(function(e) {
        $(this).parents(".notifi1").fadeOut();
        e.preventDefault();
    });
    $(".read-now").click(function(e) {
        $(this).parents(".notifi1").toggleClass("not-read");
        e.preventDefault();
    });
</script>
@endsection