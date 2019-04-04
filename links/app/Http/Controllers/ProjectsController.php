<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    public function index(){
	$projects = Project::all();

	//return $projects;

    	return view('projects.index', compact('projects'));
    }

    public function create(){
    	return view('projects.create');
    }

    public function store(Request $request){

        $file = $request->file('image');
       
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

          
    	/*$project = new Project();

    	$project->title = request('title');

    	$project->description = request('description');


    	$project->save();*/

        Project::create([
            'title' => request('title'),

            'description' => request('description'),

            'image' => $file->getClientOriginalName()

            ]);

    	return redirect('/projects')->with('message','Project Added Successfully.');
    }

    public function show(Project $project){
        //$projects = Project::find($id);

      //return $project;
       // return view('projects.show', compact('project'));
    }

    public function edit(Project $project){
       // $project = Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){
       // $project = Project::find($id);

        $project->title = request('title');

        $project->description = request('description');

        $project->save();
        return redirect('/projects');
    }

    public function destroy(Project $project){
       $project->delete();
       return redirect('/projects');
    }
    
}
