<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\laporanController;
use App\Models\Kasir;

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
Route::get('/cetak', function () {
    $kasirs = Kasir::latest()->paginate(15);

    return view('manager.cetak',compact('kasirs'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
});
// login
Route::get('/kasirr', [LoginController::class, 'index']);
Route::get('/adminn', [LoginController::class, 'index2']);
Route::get('/managerr', [LoginController::class, 'index3']);
Route::post('/kasirr', [LoginController::class, 'authanticate']);
Route::post('/adminn', [LoginController::class, 'authanticate2']);
Route::post('/managerr', [LoginController::class, 'authanticate3']);

Route::resource('kasir', KasirController::class);
Route::resource('admin', AdminController::class);
Route::resource('manager', ManagerController::class);
Route::resource('laporan', laporanController::class);
