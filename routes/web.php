<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\KantinController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\detailTransaksiController;
use App\Http\Controllers\jnspemesananController;
// use App\Http\Controllers\detailTransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\post;
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

Route::get('/home', [HomeController::class, 'index']);
//Route::get('', [HomeController::class, 'index']);

// Route::resource('home', tbstoreController::class)->only([
//     'home'
// ]);


Route::get('/din/', [dinmenuController::class, 'show']);
Route::resource('din', dinmenuController::class); //{
//Route::get('/din', function () {
//    return view('dinmenu', [
//        "title" => "Menu"
//    ]);
//});



Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@update');
// Route::get('/menu', function () {
//     return view('menu', [
//         "title" => "Menu"
//     ]);
// });

Route::get('/success', function () {
    return view('success', [
        "title" => "Success"
    ]);
});

Route::get('/', [jnspemesananController::class, 'index']);
Route::post('/jns/tambah', [jnspemesananController::class, 'store']);

Route::get('/detail-order', function () {
    return view('detail-order', [
        "title" => "detail pemesanan"
    ]);
});



Route::get('/detail-transaction', function () {
    return view('detail-transaction', [
        "title" => "detail-transaction"
    ]);
});

Route::get('detail-transaction', [detailTransaksiController::class, 'index']);
Route::post('detail-transaction', [detailTransaksiController::class, 'update']);

// Route::resource('detail-transaction', detailTransaksiController::class);


// Route::resource('/jns', jnspemesananController::class);
Route::resource('detail-order', detailorderController::class);
Route::resource('menu', menuController::class);
Route::resource('condiment', condimentController::class);


Route::get('/add', [addController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);
Route::resource('/blog', tblogController::class, [
    "title" => "blog"
]);
Route::resource('/user', tbuserController::class, [
    "title" => "user"
]);
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::group(['middleware' => ['manager']], function () {
    Route::resource('manager/store', tbstoremanagerController::class);
});
Route::group(['middleware' => ['level']], function () {
    Route::resource('admin/product', tbproductadminController::class);
    Route::resource('admin/condiment', tbcondimentadminController::class);
    Route::resource('admin/transaksi', tbtransaksiadminController::class);
    Route::resource('admin/report', reportadminController::class);
});

Route::group(['middleware' => ['superadmin']], function () {
    Route::resource('superadmin/product', tbproductController::class);
    Route::resource('superadmin/condiment', tbcondimentController::class);
    Route::resource('superadmin/user', tbuserController::class);
    Route::resource('superadmin/blog', tblogController::class);
    Route::resource('superadmin/modul', tbmodulController::class);
    Route::resource('superadmin/price', tbpriceController::class);
    Route::resource('superadmin/location', tblocationController::class);
    Route::resource('superadmin/transaction', trxheadController::class);
    Route::resource('superadmin/previllage', tbprevillageController::class);
    Route::resource('superadmin/store', tbstoreController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
