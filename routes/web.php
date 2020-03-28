<?php

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
    return view('welcome');
});
Route::get('/shopinfo','WebController@shopinfo')->name('shopinfo');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/profile', 'WebController@shopinfo') ->name('profile');
Route::get('cart', 'ProductController@cart')->name('cart_index');

Route::get('add-to-cart/{id}', 'ProductController@addToCart');
//Route::get('/products/cart/incrementCart/{id}','CartController@incrementCart')->name('update_cart_Inc');
Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');
//
//Route::patch('update-cart/{id}', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');
Route::resource('Order','OrderProductController');
Route::resource('Order_Product','OrderHasProductsController');
Route::resource('product_types', 'ProductTypeController');
Route::resource('products', 'ProductController');

Route::get('showdetails/{id}', 'ShowController@show');
Route::resource('tabledetails','TableController');
Route::resource('profile','ShowUserController');

//Route::get('/ok', 'ProductTypeController@xxx');
//
//
//Route::get('/ok', function () {
//    $test = array(
//        "test" => 1,
//        "test2" => 2,
//    );
//    return $test;
//});

//
Route::resource('users', 'UsersController');

    Route::get('Order/export_pdf','OrderProductController@export_pdf')->name('order.export_pdf');
//Route::get('registers', 'UsersController@store')->name('registers.store');
Route::get('/error', function (){
    return view('error_page');
})->name('error');
Route::post('carts', 'CartController@store')->name('carts.store');

//Route::post('orders', 'CartController@store_detail')->name('order_has_products.store_detail');

Route::group(['middleware' => ['auth', 'is_admin']], function() {
    Route::get('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');
    // Route::get('/user-dashboard','UsersController@dashboard')->name('user.dashboard');
});

