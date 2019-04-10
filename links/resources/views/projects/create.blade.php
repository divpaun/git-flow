@extends('layout')

@section('content')
<div class="container">
<h1 class="text-center">Create Project</h1><br>

  <form method="post" action="/projects" enctype="multipart/form-data">
  	{{ csrf_field()  }}
  	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Title</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="Title" name="title" />
    	 	</div>

    	 </div><br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Description</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<textarea class="form-control" placeholder="Description" name="description"></textarea>
    	 	</div>

    	 </div><Br>
        
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>&nbsp;</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<button class="btn btn-primary">Save</button>
    	 	</div>

    	 </div>
    	</form>
</div>
  



  

@endsection
