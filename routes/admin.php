<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Crud\CrudController;

/*Route::get('',function(){
    return "Hola administrador";
});*/



//Route::resource('admin/crud', CrudController::class)->names('admin.crud');
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/list-users', [UsersController::class, 'index'])->name('admin.list-users');
/*Route::get('admin/list-users', [
    'uses' => 'UsersController@index',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);*/


?>