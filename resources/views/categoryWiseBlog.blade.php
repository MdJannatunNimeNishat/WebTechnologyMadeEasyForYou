 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Categpry wise blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet"> --}}
    <link href="{{ asset('blogFontEnd/googleapis.css') }}" rel="stylesheet">
    

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
            <a href="{{ route('welcome') }}" class="text-black h2 mb-0">WebTechnologyMadeEasyForYou</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0  dropdown-toggle">
             
                                  <!-- Basic dropdown -->
                                    <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Select a category</button>

                                    <div class="dropdown-menu">
                                     
                                      @foreach($allfromCategory as $cat)
                                        <li><a class="dropdown-item" href="{{ route('cateWisePost',$cat->id) }}">{{$cat->cat_name}}</a></li>
                                        {{-- <a class="dropdown-item" href="{{ route('cateWisePost',$cat->id) }}">{{$cat->name}}</a> --}}
                                        @endforeach
                                      

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

            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>

    </header>
    
   

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>{{$category->name}}</h2>
          </div>
        </div>
        <div class="row">
{{-- start --}}
@yield('contant')
@foreach($cat_final as $cat)
          <div class="col-lg-4 mb-4">
            <div class="entry2" style="text-align: center;">
              <a href="{{route('view.post',$cat->id)}}"><img src="{{ URL::to($cat->post_image) }}  " alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt" >
              {{-- <span class="post-category text-white bg-secondary mb-3">Politics</span> --}}

              <h2><a href="{{route('view.post',$cat->id)}}">{{$cat->title}}</a></h2>
              {{-- <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ asset(' blogFontEnd/images/person_1.jpg') }}" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                <span>&nbsp;&nbsp;{{$p->created_at}}</span>
              </div> --}}
              
                {{-- <p>{{$p->desc}}</p> --}}
                 {{-- <p>{{Str::limit($cat->post_desc, 50, ' ...')}}</p> --}}
                <span>&nbsp;&nbsp;{{$cat->created_at}}</span>

                <p ><a href="{{route('view.post',$cat->id)}}">Read More</a></p>
              </div>
            </div>
          </div>
@endforeach
{{-- end --}}


        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
               {{-- <span>1</span> --}}
             {{-- <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a> --}}
              {{-- {!! $post->links() !!} --}}
            </div>

          </div>
        </div>
      </div>
    </div>

   
    
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
             
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            
            </ul>
            <ul class="list-unstyled float-left">
               @foreach($allfromCategory as $cat)

              <li><a href="{{ route('cateWisePost',$cat->id) }}">{{$cat->cat_name}}</a></li>
              
               @endforeach
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                
                <a href="https://facebook.com" target="_blank"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="https://twitter.com" target="_blank"><span class="icon-twitter p-2"></span></a>
                <a href="https://www.instagram.com/" target="_blank"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2" target="_blank"></span></a>
                <a href="#"><span class="icon-envelope p-2" target="_blank"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>

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


  </body>
</html>