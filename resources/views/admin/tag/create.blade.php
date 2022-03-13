@extends('layouts.dashboard')
<title> Tag | Create</title>
@section('content')
<!-- Content Header Part -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Create tag</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="{{route('tag.index')}}"> Tag List</a></li>
	          <li class="breadcrumb-item">Create</li>
	        </ol>
	      </div><!-- /.col -->
	    </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
<!--End Content Header Part -->

<!-- Table Content -->
	<div class="col-md-12">
	    <div class="card">
	      <div class="card-header">
	        <div class="d-flex justify-content-between">
	          <h3 class="card-title">Create tag</h3>
	          	<a href="{{route('tag.index')}}" class="btn btn-primary">Go Back</a>
	        </div>
	      </div>
	      <!-- /.card-header -->
	      <div class="card-body p-0">
		    <div class="card card-primary">
		      <div class=" col-12 col-lg-6 offset-lg-3 col-md-8 offset-lg-2">
		        <!-- form start -->
		      <form action="{{route('tag.store')}}" method="POST">
		        @csrf
		        <div class="card-body">
		          <div class="form-group">
		            <label for="name">Name</label>
		            <input type="text"
		            name="name" 
		            class="form-control" 
		            id="name" 
		            placeholder="Enter Name" required>
		          </div>
		          <div class="form-group">
		            <label for="description">Description</label>
		            <textarea name="description"
		                      id="description"
		                      rows="4"
		                      class="form-control"
		                      placeholder="Enter the description">
		            </textarea>
		          </div>
		        </div>
		        <!-- /.card-body -->

		        <div class="card-footer">
		          <button type="submit" class="btn btn-primary">Submit</button>
		        </div>
		      </form>
		      </div>
		    </div>
	      </div>
	    <!-- /.card-body -->
	    </div>
    <!-- /.card -->
  	</div>
<!-- End Table Content -->
@endsection
