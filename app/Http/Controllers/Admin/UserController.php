<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
        $users = User::paginate(5);
        return view('admin.list-users.index', compact("list-users"));

    }
}
