<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use Session;

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
//     return view('user.home');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/user/product', function () {
    return view('user.product');
});

Route::get('/template', function () {
    return view('layout.app');
});  

Route::get('/test', function () {
    return view('user.keranjang');
});  

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login_user')->name('login_user');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@register_user')->name('register_user');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/product', 'HomeController@product')->name('user_product');
Route::get('/cart', 'HomeController@cart')->name('user_cart');

Route::group(['middleware' => 'CekLoginMiddleware'], function() {
    //route
    Route::group([Session::get('roles') == 'admin'], function() {
        Route::prefix('admin/master')->group(function () {
            Route::get('/users', 'UserController@index')->name('master_user');
            Route::get('/products', 'ProductController@index')->name('master_product');
            Route::post('/products', 'ProductController@store')->name('add_product');
            Route::get('/transaction', 'TransactionController@index')->name('transaction_user');
        });
    });

    Route::get('/chart', 'ChartController@index')->name('chart');
    Route::post('/chart', 'ChartController@store')->name('add_to_chart');

    
});