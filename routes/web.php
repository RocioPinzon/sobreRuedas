<?php

use App\Http\Controllers\ContactaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();


Route::get('perfil', [\App\Http\Controllers\HomeController::class, 'index'])->name('perfil.index');
//Route::get('perfil/{user}', [\App\Http\Controllers\UserController::class,'show'])->name('show');

Route::resource("projects", ProjectController::class);

Route::get('contacta',[ContactaController::class,'index'])->name('contacta.index');
Route::post('contacta',[ContactaController::class,'store'])->name('contacta.store');

?>

