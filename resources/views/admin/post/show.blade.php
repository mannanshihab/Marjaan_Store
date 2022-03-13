@extends('layouts.dashboard')
<title>Dashboard | Post List</title>
@section('content')
<!-- Content Header Part -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark"> Post View</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	           <li class="breadcrumb-item"><a href="{{route('post.index')}}">Post List</a></li>
	          <li class="breadcrumb-item active"> View Post</li>
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
                  <h3 class="card-title"> Post Table</h3>
                  <a href="{{route('post.create')}}" class="btn btn-primary">Create Post</a>
             </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <tbody>
                        <tr>
                          <th style="width: 250px">Post Id</th>
                          <td>{{ $post -> id }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Category Name</th>
                          <td>{{ $post -> category-> name }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Post Title</th>
                          <td>{{ $post -> title }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Image</th>
                          <td>
                            <div>
                              <img style="width: 300px" 
                                src="{{asset($post->image)}}">
                            </div>
                          </td>
                        </tr>
                         <tr>
                          <th style="width: 250px">Description</th>
                          <td>{!! $post -> description !!}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Tags</th>
                          <td>
                              @foreach($post ->tags as $tag)
                                <span class="badge badge-primary">{{ $tag->name }}</span>
                              @endforeach
                          </td>
                        </tr>
                      </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
<!-- End Table Content -->
@endsection
