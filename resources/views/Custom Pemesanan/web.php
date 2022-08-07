<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\KantinController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome' , [
        "title" => "home"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::resource('condiment', tbcondimentController::class);

Route::resource('modul', tbmodulController::class);

Route::resource('price', tbpriceController::class);

Route::resource('previllage', tbprevillageController::class);

Route::resource('store', tbstoreController::class);

Route::resource('custompemesanan', custompemesananController::class);


Route::get('/posts/{slug}', [PostController::class, 'show']);
// Route::get('kantin','KantinController@index');
// Route::post('kantin/create','KantinController@create');
// Route::put('kantin/','KantinController@store');
// Route::delete('kantin','KantinController@destroy');
Route::resource('kantin', KantinController::class);
Route::get('/search','KantinController@search');
// Route::get('/cari', [App\Http\Controllers\KantinController::class, 'cari']);
