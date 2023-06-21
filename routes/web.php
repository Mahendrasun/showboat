<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerContoller;
use App\Http\Controllers\AdminController;
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

Route::get('/',[CustomerContoller::class,'index']);
Route::post('/customer/add',[CustomerContoller::class,'AddCustomer'])->name('store.customer');


Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class,'Index'])->name('admin.login.form');
    Route::POST('/login/owner',[AdminController::class,'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/register',[AdminController::class,'AdminRegister'])->name('admin.register.form');
    Route::POST('/admin/create',[AdminController::class,'Register'])->name('admin.create');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


