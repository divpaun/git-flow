@extends('layout')

@section('content')
<div class="container">
<h1 class="text-center">Edit Project</h1><br>

  <form method="POST" action="/projects/{{ $project->id }}">
  	{{ method_field('PATCH')  }}

    {{ csrf_field() }}
  	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Title</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="Title" name="title" value="{{ $project->title }}"/>
    	 	</div>

    	 </div><br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Description</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<textarea class="form-control" placeholder="Description" name="description">{{ $project->description }}</textarea>
    	 	</div>

    	 </div><Br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>&nbsp;</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<button class="btn btn-primary">Update</button>
    	 	</div>

    	 </div>
    	</form>

        <form method="POST" action="/projects/{{ $project->id }}">
            {{ method_field('DELETE')  }}
             {{ csrf_field() }}
            <button class="btn btn-danger" type="submit">Delete Project</button>
        </form>
</div>
  



  

@endsection
