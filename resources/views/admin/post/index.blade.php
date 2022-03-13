@extends('layouts.dashboard')
<title>Dashboard | Post List</title>
@section('content')
<!-- Content Header Part -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark"> Post Page</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
	          <li class="breadcrumb-item active"> Post List</li>
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
              <thead>                  
                  <th>#</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Action</th>
              </thead>
              <tbody>
                    @if ($posts->count())
                    
                    @foreach ($posts as  $post)
                    <tr>
                      <td>{{ $post -> id }}</td>
                      <td>
                        <div>
                          <img style="width: 70px" src="{{asset($post->image)}}">
                        </div>
                      </td>
                      <td>{{ $post -> title }}</td>
                      <td>{{ $post -> category-> name }}</td>
                      <td>
                          @foreach($post ->tags as $tag)
                            <span class="badge badge-primary">{{ $tag->name }}</span>
                          @endforeach
                      </td>
                      <td class="d-flex">
                        <a href="{{route('post.show',[$post->id])}}" class="btn btn-sm btn-success m-1">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{route('post.edit',[$post->id])}}" class="btn btn-sm btn-primary m-1">
                          <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{route('post.destroy',[$post->id])}}" 
                              class="m-1" method="POST">
                              @method('DELETE')
                              @csrf
                          <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>                          
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td colspan="6">
                        <h5 class="text-center">No Post Found</h5>
                      </td>
                    </tr>
                    @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item">{{ $posts -> links() }}</li>
            </ul>
          </div>
        </div>
        <!-- /.card -->
    </div>
<!-- End Table Content -->
@endsection
