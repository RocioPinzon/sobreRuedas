<?php

namespace App\Http\Controllers;

use App\Mail\ContactaMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class ContactaController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(){
        return view('contacta.index');

    }

    public function store(Request $request){
       //dd($request);
       $request->validate([
           'name'=>'required',
           'email'=>'required|email',
           'mensaje'=>'required',
       ]);
        
        
        $correo = new ContactaMail($request->all());
        
        //dd($correo);
        Mail::to('rociopinzonb@gmail.com')->send($correo);
    
        return redirect(route('contacta.index'))->with('success', 'Email enviado');
    }
}
