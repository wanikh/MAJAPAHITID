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

Route::get('/', [App\Http\Controllers\LoginsController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [App\Http\Controllers\LoginsController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [App\Http\Controllers\LoginsController::class, 'logout'])->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/profileuser', [App\Http\Controllers\ProfilesController::class, 'halamanprofileuser'])->name('profileuser');
    Route::post('/posthalamamprofileuser', [App\Http\Controllers\ProfilesController::class, 'posthalamanprofileuser'])->name('posthalamanprofileuser');
    Route::get('/viewhalamanprofileadmin', [App\Http\Controllers\ProfilesController::class, 'viewhalamanprofileadmin'])->name('viewprofileadmin');
    Route::get('/delete-profile/{id}', [App\Http\Controllers\ProfilesController::class, 'destroy'])->name('viewhalamanprofileadmin');
    Route::get('/edit-profile/{id}', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('edithalamanprofileadmin');
    Route::post('/update-profile/{id}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('update');
    Route::get('/show-profile-admin/{id}', [App\Http\Controllers\ProfilesController::class, 'showprint'])->name('showprofileadmin');
    Route::get('/show-profile-admin-pdf/{id}', [App\Http\Controllers\ProfilesController::class, 'showprintpdf'])->name('showprofileadminpdf');
    Route::get('/viewhalamanperizinanuser', [App\Http\Controllers\PerizinansController::class, 'viewhalamanperizinan'])->name('viewhalamanperizinan');
    Route::get('/delete/{id}', [App\Http\Controllers\PerizinansController::class, 'destroy'])->name('viewhalamanperizinanuser');
    Route::get('/edit-perizinan/{id}', [App\Http\Controllers\PerizinansController::class, 'edit'])->name('edithalamanperizinanuser');
    Route::post('/update/{id}', [App\Http\Controllers\PerizinansController::class, 'update'])->name('update');
    Route::get('/show/{id}', [App\Http\Controllers\PerizinansController::class, 'showprint'])->name('showperizinanuser');
    Route::get('/showprint/{id}', [App\Http\Controllers\PerizinansController::class, 'showprintpdf'])->name('showperizinanuserpdf');
    Route::get('/perizinanuser-status/{id}', [App\Http\Controllers\PerizinansController::class, 'status'])->name('viewhalamanperizinanuser');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {

    Route::get('/viewhalamanprofileuser', [App\Http\Controllers\ProfilesController::class, 'viewhalamanprofileuser'])->name('viewprofileuser');
    Route::get('/show-profile-user/{id}', [App\Http\Controllers\ProfilesController::class, 'showprintuser'])->name('showprofileuser');
    Route::get('/show-profile-user-pdf/{id}', [App\Http\Controllers\ProfilesController::class, 'showprintuserpdf'])->name('showprofileuserpdf');

    Route::get('/perizinanuser', [App\Http\Controllers\PerizinansController::class, 'halamanperizinanuser'])->name('perizinanuser');
    Route::post('/posthalamanperizinanuser', [App\Http\Controllers\PerizinansController::class, 'posthalamanperizinanuser'])->name('posthalamanperizinanuser');
    Route::get('/viewhalamanperizinanadmin', [App\Http\Controllers\PerizinansController::class, 'viewhalamanperizinanuser'])->name('viewperizinanuser');
});
