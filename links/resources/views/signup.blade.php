@extends('layout')

@section('content')

    <div class="container">
    	 <h1 class="text-center">Sign Up</h1><br>

    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>First Name</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="First Name" />
    	 	</div>

    	 </div><br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Last Name</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="Last Name" />
    	 	</div>

    	 </div><Br>
    	  <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Email</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="Email" />
    	 	</div>

    	 </div><br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>Password</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<input type="text" class="form-control" placeholder="Password" />
    	 	</div>

    	 </div><Br>
    	 <div class="row">
    	 	<div class="col-2"></div>
    	 	<div class="col-2">
    	 		<label>&nbsp;</label>
    	 	</div>
    	 	<div class="col-6">
    	 		<button type="submit" class="btn btn-primary">Save</button>
    	 	</div>

    	 </div>
 
</div>
@endsection