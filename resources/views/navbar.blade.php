<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('blogFontEnd/fonts/icomoon/style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/jquery-ui.css') }} ">
    <link rel="stylesheet" href="{{ asset('blogFontEnd/css/owl.carousel.min.css') }}  ">
    <link rel="stylesheet" href="{{ asset('blogFontEnd/css/owl.theme.default.min.css') }}  ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/bootstrap-datepicker.css') }} ">
    <link rel="stylesheet" href="{{ asset('blogFontEnd/fonts/flaticon/font/flaticon.css') }}  ">
    <link rel="stylesheet" href="{{ asset('blogFontEnd/css/aos.css') }} ">

    <link rel="stylesheet" href="{{ asset('blogFontEnd/css/style.css') }}">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Mini Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0  dropdown-toggle">
                {{-- drop down category --}}
                  {{-- <select class="btn btn-secondary dropdown-toggle" name="category">
                                <option>Select a category</option>
                                   @foreach($category  as $cat)
                                      
                                   <option><a href="{{ route('cateWisePost',$cat->id) }}"> {{$cat->name}}</a> </option>
                          
                                      @endforeach()
                                  </select> --}}
                                  {{--  --}}
                                  <!-- Basic dropdown -->
                                    <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Select a category</button>

                                    <div class="dropdown-menu">
                                      {{-- <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a> --}}
                                    {{--   @foreach($category as $cat)
                                       
                                        <a class="dropdown-item" href="{{ route('cateWisePost',$cat->id) }}">{{$cat->name}}</a>
                                        @endforeach
                                       --}}

                                    </div>
<!-- Basic dropdown -->
                                   {{--  --}}                                   
                {{--  --}}
                {{-- @foreach($category as $cat)
                <li><a href="{{ route('cateWisePost',$cat->id) }}">{{$cat->name}}</a></li>
                @endforeach --}}
                {{--  --}}
                @if (Route::has('login'))
                
                    @auth
                      		{{-- <li><a href="{{ url('/home',Auth::user()->id) }}">Home</a></li> --}}
                      		<li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        	<li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                             <li><a href="{{ route('register') }}">Register</a></li>

                        @endif
                    @endauth
               
            @endif
                {{--  --}}

               

                {{-- <li><a href="{{ url('blogDemo') }}">Register</a></li> --}}

                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            @yield('contant')
            
  <script src="{{ asset('blogFontEnd/js/jquery-3.3.1.min.js') }} "></script>
  <script src=" {{ asset(' blogFontEnd/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('blogFontEnd/js/jquery-ui.js') }}  "></script>
  <script src="{{ asset('blogFontEnd/js/popper.min.js') }}  "></script>
  <script src="{{ asset('blogFontEnd/js/bootstrap.min.js') }}  "></script>
  <script src="{{ asset('blogFontEnd/ js/owl.carousel.min.js') }} "></script>
  <script src="{{ asset('blogFontEnd/js/jquery.stellar.min.js') }}  "></script>
  <script src="{{ asset('blogFontEnd/js/jquery.countdown.min.js') }} "></script>
  <script src="{{ asset('blogFontEnd/js/jquery.magnific-popup.min.js') }} "></script>
  <script src="{{ asset('blogFontEnd/js/bootstrap-datepicker.min.js') }} "></script>
  <script src="{{ asset('blogFontEnd/js/aos.js') }} "></script>

  <script src="{{ asset('blogFontEnd/js/main.js') }} "></script>