<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }
    public function show(Project $project){
        return view('admin.projects.show', compact('project'));
    }
    public function create(){
        return view('admin.projects.create');
    }
    public function store(StoreProjectRequest $request){
        $data = $request->validated();
        $newProject = new Project($data);
        $newProject->save();
        return redirect()->view('admin.projects.show', $newProject);
    }
    public function edit(Project $project){
        return view('admin.projects.edit', $project, compact('project'));
    }
    public function update(UpdateProjectRequest $request, Project $project){
        $data = $request->validated();
        $project->update($data);
        return redirect()->view('admin.projects.show', $project)->with('edit-message', $project->name . ' '. 'has been edited with success');
    }
    public function softDeleteIndex(){
        $projects = Project::onlyTrashed()->get();
        return view('admin.projects.trash-index', compact('projects'));
    }
    public function softDelete(Project $project){
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
    public function permaDelete(string $id){
        $project = Project::onlyTrashed()->findOrFail($id);
        $project->forceDelete();
        return redirect()->route('admin.projects.trash-index')->with('');
    }
    public function restore(string $id){
        $project = Project::onlyTrashed()->findOrFail($id);
        $project->restore();
        return redirect()->route('admin.projects.trash-index')->with('');
    }
}
