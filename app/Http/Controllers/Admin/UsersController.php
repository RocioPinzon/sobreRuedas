<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;
use App\Models\Role;
use Spatie\Permission\Models\Permission;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //$users = User::paginate(5);
        

    //$permisos = Permission::all();
        return view('admin.list-users', compact('users'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /*/ public function edit($id)
    {
        $user = User::user();
        return view('admin.users.edit', compact('user'));
    }*/



    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
    
        //return view('admin.users.edit', compact('user')); 
        // return "Hola" . $id . " ". $user;
        //return View::('viewname')->with(compact('user', 'action'));
        return view('admin.users.edit', compact('user', 'roles'));
    }



    /*
    public function edit(User $user) // Role $roles
    {
       // $roles = Role::all();
       // $user = User::all();
       // return view('admin.users.edit', compact('user', 'roles'));
    
        $user = User::findOrFail($user);
        //$user = User::find($user);
        //$users = User::paginate(5);
        return view('admin.users.edit', compact('user')); 
    }*/

    /*
    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {            
        $id->roles()->sync($request->roles);

        //return "Hola" . " ". $id;

        return redirect()->route('users.edit',$id)->with('success', __("Asignando roles"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
