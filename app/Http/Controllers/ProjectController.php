<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    { 
        if(Auth::user()->hasRoles('admin')){
            $projects= Project::with("user")->paginate(10);
        }else{
            $projects= Auth::user()->projects()->paginate(10);
           
        }
    
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $title = __("Publicar vídeo");
        $textButton = __("Publicar");
        $route = route("projects.store");
        return view("projects.create", compact("title", "textButton", "route", "project"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            "name" => "required|max:140|unique:projects",
            "description" => "nullable|string|min:10"
        ]);
        
        Project::create($request->only("name", "description"));
        
        // $user=Auth::user()->id;
        //  dd($user);
        /*$project = Project::make(
            $request->only("name", "description")
        );
        $project->user_id = Auth::user()->id;
        $project->save();
        */

        return redirect(route("projects.index"))
            ->with("success", __("¡Proyecto creado!"));
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
    public function edit(Project $project)
    {
        $update = true;
        $title = __("Editar video");
        $textButton = __("Actualizar");
        $route = route("projects.update", ["project" => $project]);
        return view("projects.edit", compact("update", "title", "textButton", "route", "project"));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            "name" => "required|unique:projects,name," . $project->id,
            "description" => "nullable|string|min:9|max:15"
        ]);
        
        $project->fill($request->only("name", "description"))->save();
        
        // $user=Auth::user()->id;
        //  dd($user);
        /*$project = Project::make(
            $request->only("name", "description")
        );
        $project->user_id = Auth::user()->id;
        $project->save();
        */

        return back()->with("success", __("¡Proyecto Actualizado!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project -> delete();
        return back()->with("success", __("¡Proyecto eliminado!"));
    }
}
