@extends('layouts.home')
@section('content')
<title>Category</title>
<!-- Start All Catagory Section -->
<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-12 fa mt-5">
            <h3> {{ $category->name }} </h3>
            <div class="col-12">
                <p class="lead text-secondary">Let's See...</p>
            </div>
            </div>
        </div>
        <div class="container main">
            <div class="row">
                <!-- All Item -->
                @foreach ($posts as  $post)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <img class="img-fluid" 
                                src="{{asset($post->image)}}" 
                                alt="card image">
                            </p>
                        </div>
                        <div align="center">
                        <a href="{{route('website.details', ['slug'=> $post-> slug])}}">
                            <button class="btn btn-dark" style="margin-bottom: 20px;">Details</button>
                        </a>
                        </div >
                    </div>
                </div>
                @endforeach
                <!-- .All Item -->
               <div>
            </div>
            </div>
        </div>
        <!--Start Pagination -->
        <div class="mt-5">
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    {{ $posts -> links() }}
                </li>
            </ul>
        </div>
        <!--End Pagination -->
    </div> <!--Close Container -->
</section>
<!-- End All Catagory Section -->
@endsection
