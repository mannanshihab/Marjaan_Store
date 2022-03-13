<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('website')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/responsive.css">
</head>
<body>
<!---Strat header-->
<header>
    <div class="container-fluid nav-div bg-light">
        <div class="row">
            <div class="col-sm">
                <div class="container">
                    <nav class="navbar bg-light navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><img src="{{asset('website')}}/img/Dragon.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-secondary ml-auto">
                            <!-- Start Home Menu-->
                            <li class="nav-item dropdown">
                                 <a class="nav-link" href="{{route('website.home')}}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-home"> Home </i>
                                </a>
                            </li>
                            <!-- END Home Menu-->
                            <!-- Start Product Menu Part-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Catagory
                                </a>
                                <div class="dropdown-menu bg-light text-center" aria-labelledby="navbarDropdown">
                                    @foreach($categories as $category)
                                        <a class="nav-link" href="{{ route('website.category', ['slug' => $category->slug  ]) }}">{{$category->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <!-- END Product Menu Part-->
                            <!-- Start About  Menu Part-->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('website.about')}}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                    <i class="fa"> About </i>
                                </a>
                            </li>
                            <!-- END About Menu Part--> 
                            <!-- Start Contact Menu Part-->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('website.contact')}}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                    <i class="fa"> Contact </i>
                                </a>
                            </li>
                            <!-- END Contact Menu Part--> 
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form class="form-inline my-2 my-lg-0 " 
                                        class="dropdown-item">
                                        <input  id="Search-2" 
                                                class="form-control collapse mr-sm-2" 
                                                type="search" 
                                                placeholder="Search" 
                                                aria-label="Search">
                                <a class="btn btn-secondary" 
                                        type="submit"
                                        data-toggle="collapse" 
                                        data-target="#Search-2"> 
                                    <i class="fa fa-search text-light"></i>
                                </a>
                                </form>
                            </li>
                            <!-- End Search Menu Part-->
                             <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                                </a>
                            </li>
                        </ul> 
                    </div>
                </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--- end header-->

@yield('content')

<!-- Strat OF footer Markup -->
<footer class="footer navbar bg-light mt-5">
    <div class="container">
        <div class="col-md-6  col-sm-6">
            <h6 class=""> DRAGONSHOP   
                <span class="text-secondary">&copy; 2020</span>
            </h6>
        </div>
        <div class="col-md-6  col-sm-6">
            <div class="bottom-social-icons pull-right">  
                <a class="facebook" target="_blank" href="#">
                <i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="#">
                <i class="fa fa-twitter"></i></a>
                <a class="google-plus" target="_blank" href="#">
                <i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="#">
                <i class="fa fa-linkedin"></i></a>
            </div>            
        </div>
    </div>  
</footer>
<!-- END OF footer Markup -->
    
    <!-- JavaScript -->
<script src="{{asset('website')}}/js/jquery.slim.min.js"></script>
<script src="{{asset('website')}}/js/popper.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.min.js"></script>
</body>

</html>                                                                                       

