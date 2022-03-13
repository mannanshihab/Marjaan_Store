@extends('layouts.home')

@section('content')
<title>Marjaan | Welcome</title>
<!-- Start All Catagory Section -->
<section id="all_product">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 fa mt-5">
            <h3 class=""> All Category</h3>
            <div class="col-12">
                <p class="lead text-secondary">Let's See...</p>
            </div>
            </div>
        </div>
        <div class="container main">
            <div class="row">
                <!-- All Item -->
                @foreach($categories as $category)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <span class="rollover">
                            <a class="btn btn-light" href="{{ route('website.category', ['slug' => $category->slug  ]) }}">See More </a>
                        </span>
                        <div class="card-body">
                            <p><img class="img-fluid" src="{{asset('website')}}/img/category.png" alt="card image"></p>
                        </div>
                        <div><h4 class="card-title text-center">{{$category->name}}</h4></div>
                    </div>
                </div>
                @endforeach
                
                <!-- .All Item -->
            </div>
        </div>
    </div> <!--Close Container -->
</section>
<!-- End All Catagory Section -->
@endsection
