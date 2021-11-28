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
<<<<<<< HEAD
})
->middleware(['auth'])
->name('dashboard');
Route::get('/dashboard-konsultant',function (){
  return view ('/dashboard-konsultant');
})->middleware(['auth:konsultant','auth'])->name('dashboard-konsultant');
=======
})->middleware(['auth'])->name('dashboard');


//Route to user array 
Route::get('/',[MainController::class, 'index']);




Route::get('/login',[MainController::class, 'login'])->name('login');
>>>>>>> b00bf56201a3130fe1e7a35521644f8b71afb253
require __DIR__.'/auth.php';
