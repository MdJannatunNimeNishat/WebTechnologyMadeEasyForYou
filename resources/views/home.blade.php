


{{-- <head>WebTechnologyMadeEasyForYou</head> --}}
<title>User Profile</title>

{{-- online links --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

{{-- offline links --}}
 <link href="{{ asset('blogFontEnd/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('blogFontEnd/bootstrap.min.js') }}" rel="stylesheet">
 <link href="{{ asset('blogFontEnd/jquery.min.js') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('blogFontEnd/home.css') }}">
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">


</style>
<div class="container emp-profile">
            {{-- <form method="post" > --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                           
                            <img src="{{Auth::user()->image}}" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2>
                                        {{Auth::user()->name}}
                                    </h2>
                                
                                    {{-- <p class="proile-rating">Number of Post : <span>1</span></p> --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    {{-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="{{ route('userAbout',Auth::user()->id) }}" role="tab" aria-controls="home" aria-selected="true">About</a> --}}
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href=" {{route('timeLine',Auth::user()->id)}}" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href=" {{route('createPost',Auth::user()->id)}}" role="tab" aria-controls="profile" aria-selected="false">Add post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div> --}}
                    {{--  --}}

                    <div class="col-md-2">

                    	{{-- edit --}}
                        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary">Home</a>

                    	<a href="{{ route('editProfile',Auth::user()->id) }}" class="profile-edit-btn">Edit Profile</a>




                    	{{-- logout --}}
                    <a class="profile-edit-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                     </form>
                    </div>
                    {{--  --}}
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>Field of interest</p>
                            <a href="">{{Auth::user()->fieldOfInterest}}</a><br/>
                         
                        </div>
                    </div>
                    <div class="col-md-8">

                            @yield('content')
                            <hr>
                        
                      {{--   @yield('contant') --}}
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Field of Interest</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->fieldOfInterest}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            {{-- </form>            --}}
        </div>
















