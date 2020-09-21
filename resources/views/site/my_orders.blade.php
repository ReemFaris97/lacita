@extends('site.layout')
@section('title' , 'حوافل || طلباتى')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<!-- start datatable -->
<link rel="stylesheet" href="{{asset('website/dist/css/Datatable/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/Datatable/responsive.dataTables.min.css')}}">
<!-- end datatable -->
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
    <div class="single-workdiv">
        <h3 class="titlebread"> طلباتى </h3>
        <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('my-profile')}}">حسابى</a> / طلباتى</p>
    </div>
    <img class="absimgbread" alt="" src="{{asset('website/dist/img/grass.png')}}">
    <div id="leaves">
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
        <i></i>
    </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->

<!-- /////////////////////||||||||||| start my_orders |||||||||||||||||||| -->
<section class="my_adress">
    <div class="container">
        <table class="datatable display nowrap">
            <thead>
                <tr>
                    <th>رقم الطلب.</th>
                    <th>تاريخ الطلب</th>
                    <th>إجمالى مبلغ الطلب</th>
                    <th>حالة الطلب</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>15 Nov 2020</td>
                    <td>3000 ر.س</td>
                    <td>تم التسليم</td>
                    <td>
                        <div class="flex-r">
                            <a href="{{url('order_details')}}" class="btn-hvr andShow">
                                <span class="z-span">
                                    <p class="opert"><i class="far fa-eye"></i></p>عرض
                                </span>
                            </a>
                            <!-- لو حالة الحجز //تم التسليم// اظهر حذف -->
                            <button type="button" class="btn-hvr remove_order">
                                <span class="z-span">
                                    <p class="opert"><i class="far fa-trash-alt"></i></p>حذف
                                </span>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>22 Nov 2020</td>
                    <td>2300 ر.س</td>
                    <td>قيد التجهيز</td>
                    <td>
                        <div class="flex-r">
                            <a href="{{url('order_details')}}" class="btn-hvr andShow">
                                <span class="z-span">
                                    <p class="opert"><i class="far fa-eye"></i></p>عرض
                                </span>
                            </a>
                            <!-- لو حالة الحجز //قيد التجهيز// اظهر إلغاء -->
                            <button type="button" class="btn-hvr andCancel">
                                <span class="z-span">
                                    <p class="opert"><i class="fas fa-power-off"></i></p>إلغاء
                                </span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!-- /////////////////////|||||||||||End my_orders |||||||||||||||||||| -->

@endsection

@section('scripts')
<!----- datatable init---->
<script src="{{asset('website/dist/js/Datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('website/dist/js/Datatable/dataTables.responsive.min.js')}}"></script>
<script>
$(document).ready(function () {
    $('.datatable').DataTable({
        responsive: true
    });
});
</script>
<!---- remove an order item --->
<script>
    $(".remove_order").click(function() {
        $(this).parents("tr").fadeOut(300);
    });
</script>
@endsection