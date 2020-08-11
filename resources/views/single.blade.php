 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet"> --}}
    <link href="{{ asset('blogFontEnd/googleapis.css') }}" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href=" {{ asset('blogFontEnd/fonts/icomoon/style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/jquery-ui.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/bootstrap-datepicker.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/fonts/flaticon/font/flaticon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/aos.css') }} ">

    <link rel="stylesheet" href=" {{ asset('blogFontEnd/css/style.css') }} ">
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
                
                {{-- new --}}
                 <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">Select a category</button>

                                    <div class="dropdown-menu">
                                     
                                      @foreach($category as $cat)
                                        {{-- <li><a href="{{ route('cateWisePost',$cat->id) }}">{{$cat->name}}</a></li> --}}
                                        <a class="dropdown-item" href="{{ route('cateWisePost',$cat->id) }}">{{$cat->cat_name}}</a>
                                        @endforeach
                                      

                                    </div>
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


                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li> 
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    {{-- <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url(' {{ asset('blogFontEnd/images/img_2.jpg') }} ');"> --}}

    	<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url(' {{ URL::to($post->post_image) }} ');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3">{{$post->category}}</span>
         

              <h1 class="mb-4"><a href="#">{{$post->title}}</a></h1>
              <div class="post-meta align-items-center text-center">
                

                @foreach($user as $u)
                <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="{{URL::to($u->image) }}" alt="Image" class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">{{$u->name}}</span>
                @endforeach
              
                <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
              <p>{{$post->title}}</p>
            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
                <img src="{{ URL::to($post->post_image) }} " alt="Image placeholder" class="img-fluid rounded">
              </div>
             

            </div>
            <p>{{$post->desc}}</p>
            </div>

            


            <div class="pt-5">
              <h3 class="mb-5">{{$countComment}} Comments</h3>
              <ul class="comment-list">
                @foreach($comment as $com)

                <li class="comment">
                  <div class="vcard">
                  	
                    {{-- <img src="{{ asset('blogFontEnd/images/person_1.jpg') }} " alt="Image placeholder"> --}}
                  </div>
                  <div class="comment-body">
                    <h3>{{$com->commentAuthorName}}</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>{{$com->comment}}</p>
                    {{-- <p><a href="#" class="reply rounded">Reply</a></p> --}}
                  </div>
                </li>
            @endforeach

              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>


                {{-- <form action="#"   class="p-5 bg-light"> --}}
                <form action="{{ route('comment',$post->id) }}" method="POST"  class="p-5 bg-light" enctype="multipart/form-data">
                        @csrf

                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  {{-- <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div> --}}

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>


              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
              	@foreach($user as $u)
              	   
                <img src="{{URL::to($u->image)}}" alt="Image Placeholder" class="img-fluid mb-5">
                <div class="bio-body">
                  <h2>{{$u->name}}</h2>
                  <p class="mb-4"> {{$u->fieldOfInterest}}</p>
                  <p><a href="{{route('readMyBio',$u->id)}}" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                   @endforeach
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">New Posts</h3>
              <div class="post-entry-sidebar">
                <ul>

                  

                  
                  @foreach($allPost as $all)
                  
                    

                   
                  <li>
                    <a href="">
                      <img src="{{URL::to($all->post_image)}}" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>{{$all->title}}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{$all->created_at}} </span>
                        </div>
                      </div>
                    </a>
                  </li>
                 
                  
                  @endforeach
                  {{--  --}}
                 


            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
               

                @foreach($category as $cat)
                <li><a href="{{route('cateWisePost',$cat->id)}}">{{$cat->cat_name}}</a></li>

                @endforeach
              </ul>
            </div>
            <!-- END sidebar-box -->

           

          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h2>More Related Posts</h2>
          </div>
        </div>

        <div class="row align-items-stretch retro-layout">
   


          <div class="col-md-7 two-col d-block d-md-flex">
            @foreach($relatedPost as $post)
            <a href="{{route('view.post',$post->id)}}" class="hentry img-2 v-height mb30 gradient     ml-auto " style="background-image: url('{{URL::to($post->post_image)}}');">
              {{-- <span class="post-category text-white bg-success">{{$post->category}}</span> --}}
              
              <div class="text text-sm">
                <h2>{{$post->title}}</h2>
                <span>{{$post->created_at}}</span>
              </div>
            </a>

         

            @endforeach
            <br>
            
            
            
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
              {{-- <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li> --}}
              @foreach($category as $cat)
                <li><a href="{{route('cateWisePost',$cat->id)}}">{{$cat->cat_name}}</a></li>
                @endforeach
            </ul>
           {{--  <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul> --}}
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

  <script src=" {{ asset('blogFontEnd/js/jquery-3.3.1.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/jquery-migrate-3.0.1.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/jquery-ui.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/popper.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/bootstrap.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/owl.carousel.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/jquery.stellar.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/jquery.countdown.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/jquery.magnific-popup.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/bootstrap-datepicker.min.js') }} "></script>
  <script src=" {{ asset('blogFontEnd/js/aos.js') }} "></script>

  <script src=" {{ asset('blogFontEnd/js/main.js') }} "></script>


    
  </body>
</html>