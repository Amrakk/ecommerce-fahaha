<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\CategoryProduct;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BrandProduct;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ServiceController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\CheckOutController;


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



////Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::post('/search', [HomeController::class, 'search']);

//Category_welcome
Route::get('/category/{category_id}', [CategoryProduct::class, 'show_category_home']);
Route::get('/brand/{brand_id}', [BrandProduct::class, 'show_brand_home']);
Route::get('/product-details/{product_id}', [ProductController::class, 'details_product']);

////Backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/log-out', [AdminController::class, 'log_out']);
Route::get('/welcome', [AdminController::class, 'welcome']);

//Category Product
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);

//Brand Product
Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);
Route::get('/show-brand/{brand_product_id}', [BrandProduct::class, 'show_brand']);

//Product
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);

//Cart
Route::post('/save-cart', [CartController::class, 'save_cart']);
Route::post('/update-cart-quantity', [CartController::class, 'update_cart_quantity']);
Route::get('/show-cart', [CartController::class, 'show_cart']);
Route::get('/delete-cart/{rowId}', [CartController::class, 'delete_cart']);

//CheckOut
Route::get('/login-checkout', [CheckOutController::class, 'login_checkout']);
Route::get('/logout-checkout', [CheckOutController::class, 'logout_checkout']);
Route::get('/show-checkout', [CheckOutController::class, 'show_checkout']);
Route::get('/payment', [CheckOutController::class, 'payment']);
Route::post('/verify-password', [CheckOutController::class, 'verify_password']);
Route::post('/save-checkout-customer',[CheckOutController::class,'save_checkout_customer']);
Route::get('/successOrder', [CheckOutController::class, 'successOrder']);

///Service
Route::get('/contact-us',[ServiceController::class,'index']);
Route::post('/save-feedback',[ServiceController::class,'save_feedback']);

///User
Route::get('/user-login',[UserController::class,'user_login']);
Route::get('/user-register',[UserController::class,'user_register']);
Route::post('/save-user',[UserController::class,'save_user']); 
Route::post('/verify-login-user',[UserController::class,'verify_login_user']);

//Order
Route::get('/manage-order',[CheckOutController::class,'manage_order']);
Route::post('/place-order',[CheckOutController::class,'place_order']);
Route::get('/view-order/{orderId}',[CheckOutController::class,'view_order']);