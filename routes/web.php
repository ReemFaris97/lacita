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
Route::get('/multimedia', function () {
    return view('site.multimedia');
});
Route::get('/singleMulti', function () {
    return view('site.singleMulti');
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
Route::get('/new_products', function () {
    return view('site.new_products');
});  /// المنتجات الجديدة
Route::get('/offers', function () {
    return view('site.offers');
});
Route::get('/public_offers', function () {
    return view('site.public_offers');
});
Route::get('/single-product', function () {
    return view('site.single-product');
});
Route::get('/favourites', function () {
    return view('site.favourites');
});
Route::get('/offer', function () {
    return view('site.offer');
});

/******Profile******/
Route::get('/my-profile', function () {
    return view('site.my-profile');
});
Route::get('/editprofile', function () {
    return view('site.editprofile');
});
Route::get('/edit_password', function () {
    return view('site.edit_password');
});
/**orders */
Route::get('/my_orders', function () {
    return view('site.my_orders');
});
Route::get('/order_details', function () {
    return view('site.order_details');
});
/**addresses */
Route::get('/my_addresses', function () {
    return view('site.my_addresses');
});
Route::get('/new_address', function () {
    return view('site.new_address');
});
/**wallet */
Route::get('/my_wallet', function () {
    return view('site.my_wallet');
});
Route::get('/recharge_wallet', function () {
    return view('site.recharge_wallet');
});
/* notifications */
Route::get('/notifications', function () {
    return view('site.notifications');
});
/**** cart***/
Route::get('/cart', function () {
    return view('site.cart');
});
Route::get('/payOff', function () {
    return view('site.payOff');
});
Route::get('/booking-done', function () {
    return view('site.booking-done');
});


/***** Login Forms ****/
Route::get('/sign-in', function () {
    return view('site.sign-in');
});
Route::get('/sign-up', function () {
    return view('site.sign-up');
});
Route::get('/forget-password', function () {
    return view('site.forget-password');
});
Route::get('/confirmation-code', function () {
    return view('site.confirmation-code');
});
Route::get('/new-password', function () {
    return view('site.new-password');
});


