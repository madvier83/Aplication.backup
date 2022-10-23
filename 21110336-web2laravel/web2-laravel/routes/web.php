<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;

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

Route::redirect("/", "/bab5");

// Bab 2
Route::prefix('bab2')->group(function () {

    Route::get('/', function () {
        return view('bab2/home');
    });
    Route::get('/siswa', function () {
        return view('bab2/siswa', ["nama" => ""]);
    });
    Route::get('/siswa/{nama}', function ($nama) {
        return view('bab2/siswa', ["nama" => $nama]);
    });
    Route::view('/about','bab2/about',[
        "nama" => "Muhammad Advie Rifaldy",
        "alamat" => "Bandung Jawa Barat"
    ]);

    Route::view('/admin','bab2/admin/v_index');
    Route::view('/admin/add','bab2/admin/v_add');
    Route::view('/admin/edit','bab2/admin/v_edit');

});

// Bab 3-4
Route::prefix('bab3')->group(function () {

    Route::get("/", function () {
        return view("bab3/home");
    });
    
    Route::get("/guru", function () {
        return view("bab3/v_guru");
    });

});

// Bab 5-6
Route::prefix('bab5')->group(function () {

    Route::get("/", [HomeController::class, "index"]);
    Route::resource("/guru", GuruController::class);
    Route::get("/siswa", [HomeController::class, "siswa"]);
    Route::get("/user", [HomeController::class, "user"]);

    // Route::get("/", function () {
    //    return view('bab5/home');
    // });
    // Route::view("/guru", "bab5/guru");
    // Route::view("/siswa", "bab5/siswa");
    // Route::view("/user", "bab5/user");
});
