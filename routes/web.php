<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('site.home');
});
/****/
/***** Login Forms ****/
Route::get('/sign-in', function () {
    return view('site.login.sign-in');
});
Route::get('/sign-up', function () {
    return view('site.login.sign-up');
});
Route::get('/sign_mobile', function () {
    return view('site.login.sign_mobile');
});
Route::get('/forgot-pass', function () {
    return view('site.login.forgot-pass');
});
Route::get('/confirmation-code', function () {
    return view('site.login.confirmation-code');
});
Route::get('/new-password', function () {
    return view('site.login.new-password');
});
/**********************/
Route::get('/contact-us', function () {
    return view('site.contact-us');
});
Route::get('/about', function () {
    return view('site.about');
});
Route::get('/use_policy', function () {
    return view('site.use_policy');
});
Route::get('/polices_rules', function () {
    return view('site.polices_rules');
});
Route::get('/return_policy', function () {
    return view('site.return_policy');
});
Route::get('/privacy', function () {
    return view('site.privacy');
});
/**** categories *****/
Route::get('/categories', function () {
    return view('site.categories');
}); ///  الأقسام
Route::get('/sub-sections', function () {
    return view('site.sub-sections');
}); /// الأقسام الفرعية
Route::get('/products', function () {
    return view('site.products');
}); /// منتجات القسم الفرعى
Route::get('/single-product', function () {
    return view('site.single-product');
}); /// تفاصيل المنتج
Route::get('/search_map', function () {
    return view('site.search_map');
});  //// البحث بالخريطة
/******Profile******/
Route::get('/editprofile', function () {
    return view('site.editprofile');
});
/**favourites */
Route::get('/my_favourites', function () {
    return view('site.my_favourites');
});
/**my orders */
Route::get('/my_orders', function () {
    return view('site.my_orders');
});
/* notifications */
Route::get('/inbox', function () {
    return view('site.inbox');
});
/**** cart***/
Route::get('/select_service', function () {
    return view('site.select_service');
});
Route::get('/select_staff_services', function () {
    return view('site.select_staff_services');
});
Route::get('/select_voucher', function () {
    return view('site.select_voucher');
});
Route::get('/quantity', function () {
    return view('site.quantity');
});
Route::get('/select_staff', function () {
    return view('site.select_staff');
});
Route::get('/recipient', function () {
    return view('site.recipient');
});
Route::get('/payment_method', function () {
    return view('site.payment_method');
});
Route::get('/print_gift', function () {
    return view('site.print_gift');
});
Route::get('/email_gift', function () {
    return view('site.email_gift');
});
Route::get('/select_time', function () {
    return view('site.select_time');
});
Route::get('/pay_methods', function () {
    return view('site.pay_methods');
});
Route::get('/new_card', function () {
    return view('site.new_card');
});
