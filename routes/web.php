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

// Route::get('/', function () {
//     return view('welcome');
// });
#Admin Controller Routes
Route::get('admin','AdminController@admin');

#BACKEND ROUTES

#----------------------------------------------------------
#Category Controller Routes
Route::get('category/create','CategoryController@create');
Route::post('category/save','CategoryController@save');
Route::get('category/display','CategoryController@display');
Route::get('category/view/{id}','CategoryController@view');
Route::get('category/edit/{id}','CategoryController@edit');
ROute::post('category/update','CategoryController@update');
ROute::get('category/delete/{id}','CategoryController@delete');

#Product Controller Routes
Route::get('product/create','ProductController@create');
Route::post('product/save','ProductController@save');
Route::get('product/display','ProductController@display');
Route::get('product/view/{id}','ProductController@view');
Route::get('product/edit/{id}','ProductController@edit');
Route::post('product/update','ProductController@update');
Route::get('product/delete/{id}','ProductController@delete');

#Coupon Controller Routes
Route::get('coupon/create','CouponController@create');
Route::post('coupon/save','CouponController@save');
Route::get('coupon/display','CouponController@display');
Route::get('coupon/view/{id}','CouponController@view');
Route::get('coupon/edit/{id}','CouponController@edit');
Route::post('coupon/update','CouponController@update');
Route::get('coupon/delete/{id}','CouponController@delete');

#Banner Controller Routes
Route::get('banner/create','BannerController@create');
Route::post('banner/save','BannerController@save');
Route::get('banner/display','BannerController@display');
Route::get('banner/view/{id}','BannerController@view');
Route::get('banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');
Route::get('banner/delete/{id}','BannerController@delete');

#Backend Contact pages
Route::get('contact/display','ContactController@display');
Route::get('contact/delete/{id}','ContactController@delete');

#Backend Order detail pages
Route::get('order/display','AdminController@orders');
Route::get('order/view/{id}','AdminController@orderdetail');
Route::get('order/invoice/{id}','AdminController@orderinvoice');
#----------------------------------------------------------

#FRONEND ROUTES

#----------------------------------------------------------

#Front Auth Routes
Route::get('front/login','UserController@login');
Route::post('loginsave','UserController@loginsave');
Route::get('front/register','UserController@register');
Route::post('front/regsave','UserController@regsave');
Route::get('front/logout','UserController@logout');

#GOOGLE LOGIN
Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

#FACEBOOK LOGIN
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

#FORGOT PASSWORD
// Route::post('reset_password_without_token', 'AdminController@validatePasswordRequest');
// Route::post('reset_password_with_token', 'AdminController@resetPassword');
// Route::post('password/email', 'ForgotPasswordController@forgot');
// Route::view('forgot_password', 'auth.reset_password')->name('password.reset');
// Route::post('password/reset', 'ForgotPasswordController@reset');

#Front Controller Routes
Route::get('/','FrontController@index');
Route::get('front/productdetail/{id}','FrontController@productdetail');
Route::get('front/category/{category_id}','FrontController@category');

#My account
Route::get('account','FrontController@account');
Route::get('order/{order_id}','FrontController@orderdetails');
Route::post('change-password', 'FrontController@changepassword')->name('change.password');

#Add to cart
Route::post('addtocart','FrontController@addtocart');
Route::get('cart','FrontController@cart');
Route::get('cart/delete/{id}','FrontController@delcartitem');
Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');

#Checkout
Route::get('checkout','FrontController@checkout');

#Place order
Route::post('place_order','FrontController@place_order');

#Payment page for online payment
Route::get('payment/{order_id}','FrontController@place_order');

#Order Confirmation page
Route::get('thanks/{order_id}','FrontController@orderconfirm');

#about
Route::get('about','FrontController@about'); 

#Contact us page
Route::get('contact','FrontController@contact');
Route::post('savecontact','FrontController@savecontact');



#----------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','AdminController@dashboard');