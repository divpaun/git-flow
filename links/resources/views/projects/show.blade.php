@extends('layout')

@section('content')
<a href="/projects/create" class="btn btn-primary pull-right">Add project</a>
<div class=" text-center">
	
  <h1>{{ $project->title }}</h1>

  
  <p>{{ $project->description }}</p>

  <div>
  	
  	@if ($project->tasks->count())

  	@foreach ($project->tasks as $task)

  		
  			<form method="post" action="/tasks/{{ $task->id }}">
  				@method('PATCH')

    			@csrf
  				<label class="checkbox" for="completed">
  					<input {{ $task->completed ? 'checked':'' }} type="checkbox" name="completed" onchange="this.form.submit()"    />
  					{{ $task->description }} 
  				</label>
  				
  			</form>
  			

  		
  	@endforeach

  	@endif
 
  </div>

  <a class="btn btn-primary" href="/projects/{{$project->id}}/edit">Edit</a><Br> <br>

  <form method="post" action="/projects/{{$project->id}}/tasks">

    @csrf
     @if(count($errors))
                    <ul class="alert alert-danger well">
                        @foreach($errors->all() as $error)
                            <li class="list-unstyled">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
    <div class="row">
        <div class="col-4"></div>   
      <div class="col-2">
        <label class="lable" for="description">New Task</label>
         </div>
        <div class="col-2">
          <input type="text" class="form-control" name="description" placeholder="New Task" />
        </div>
     
        
    </div><br>
    <div class="row">
        <div class="col-4"></div>   
      <div class="col-2">
        <label class="lable" for="description">&nbsp;</label>
         </div>
         
        <div class="col-2">
         <button class="btn btn-primary">Save</button>
        </div>
     
        
    </div>
  </form>
  
</div>
  

@endsection
