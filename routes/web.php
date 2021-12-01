<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');
Route::get('/dashboard-konsultant',function (){
  return view ('/dashboard-konsultant');
})->middleware(['auth:konsultant','auth'])->name('dashboard-konsultant');

Route::get('/dashboard-admin',function(){
  return view('dashboard-admin');
})->name('dashboard-admin')->middleware('is_admin');

require __DIR__.'/auth.php';
//Route to user
Route::get('/',[MainController::class,'index']);
