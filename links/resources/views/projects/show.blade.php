@extends('layout')

@section('content')
<a href="/projects/create" class="btn btn-primary pull-right">Add project</a>
<div class=" text-center">
	
  <h1>{{ $project->title }}</h1>

  
  <p>{{ $project->description }}</p>

  <a class="btn btn-primary" href="/projects/{{$project->id}}/edit">Edit</a>
  
</div>
  

@endsection
