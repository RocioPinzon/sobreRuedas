<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PermisosController;
use App\Http\Controllers\Admin\ProjectsController;

use App\Http\Controllers\Crud\CrudController;

/*Route::get('',function(){
    return "Hola administrador";
});*/



//Route::resource('admin/crud', CrudController::class)->names('admin.crud');
Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware('can:admin');

Route::get('admin/list-projects', [ProjectsController::class, 'index'])->name('admin.list-projects')->middleware('can:admin.list_projects');
Route::get('users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit')->middleware('can:admin');

Route::get('admin/list-users', [UsersController::class, 'index'])->name('admin.list-users')->middleware('can:admin.list_users');
Route::get('admin/list-permisos', [PermisosController::class, 'index'])->name('admin.list-permisos')->middleware('can:admin.list-permisos');//->middleware('can:admin');

//Route::get('/cart/payment', 'CartController@getcartpayment')->middleware('checkAuth');


//16032022
Route::put('users/{id}/edit', [UsersController::class, 'update'])->name('user.edit')->middleware('can:admin');




//return view('admin.users.edit', compact('user'));
//Route::put('users/{id}/edit', [UsersController::class, 'edit'])->name('user.edit');
//Route::resource('users',UsersController::class);
/*Route::get('admin/list-users', [
    'uses' => 'UsersController@index',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);*/


?>