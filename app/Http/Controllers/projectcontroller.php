<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class projectcontroller extends controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        return view('projects.index',[
            'projects'=> Project::latest()->paginate()
        ]);
    }
    public function show(project $project)
    {
        return view('projects.show',[
            'project'=> $project
        ]);
    }
    public function create()
    {
        return view('projects.create',[
            'project'=> new project
        ]);
    }
    public function store(saveProjectRequest $request)
    {
        project::create( $request->validated() );

        return redirect()->route('projects.index')->with('status', 'el proyecto fue creado con exito');
    }
    public function edit(project $project)
    {
        return view('projects.edit',[
            'project'=> $project
        ]);
    }
    public function update(project $project, saveProjectRequest $request )
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','el proyecto fue actualizado con exito');
    }
    public function destroy(project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
