<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\ProjectCreated;
use App\Project;
class ProjectsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
	$projects = Project::all();

	//return $projects;

    	return view('projects.index', compact('projects'));
    }

    public function create(){
    	return view('projects.create');
    }

    public function store(Request $request){

       // $file = $request->file('image');
       
        /*$destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());*/

       /* $attributes = request()->validate([
            'title' => ['required','min:3'],

            'description' => ['required','min:3'],
        ]);

        $attributes['owner_id'] = auth()->id();*/

       

       // return $request->old('title');
          
    	$project = new Project();

    	$project->title = request('title');

    	$project->description = request('description');

        $project->owner_id = auth()->id();

    	$project->save();

        //$project = Project::create($attributes);

        $mail = Mail::to('divyesh@improwised.com')->send(
            new ProjectCreated($project)

        );
        return $mail;
        //return redirect('/projects')->with('message','Project Added Successfully.');

    	
    }

    public function show(Project $project){
        //$projects = Project::find($id);
        $this->authorize('update', $project);
     //return $project->owner_id;
        if($project->owner_id !== auth()->id()){
           // return "Hello";
           // abort(403);
        }
     return view('projects.show', compact('project'));
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
