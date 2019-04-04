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

  <a class="btn btn-primary" href="/projects/{{$project->id}}/edit">Edit</a>
  
</div>
  

@endsection
