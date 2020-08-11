<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Category</title>
	<link type="text/css" href=" {{ asset('adminDash/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
	<link type="text/css" href=" {{ asset('adminDash/bootstrap/css/bootstrap-responsive.min.css') }} " rel="stylesheet">
	<link type="text/css" href=" {{ asset('adminDash/css/theme.css') }} " rel="stylesheet">
	<link type="text/css" href=" {{ asset('adminDash/images/icons/css/font-awesome.css') }} " rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="{{ route('admin.home') }}">
			  		Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Drops <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								{{-- <li><a href="#">Logout</a></li> --}}
								{{--  --}}
								<li> <a class="profile-edit-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
					                                        
					                    </a></li>
					                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					                                        @csrf
					                     </form>
								{{--  --}}



							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="{{ route('admin.home') }}">
									<i class="menu-icon icon-dashboard"></i>
									Home
								</a>
							</li>
							<li>
								<a href="{{ route('show.category') }}">
									<i class="menu-icon icon-bullhorn"></i>
									add category
								</a>
							</li>
							<li>
								<a href="{{ route('all.post') }}">
									<i class="menu-icon icon-inbox"></i>
									All posts
									
								</a>
							</li>
							
							<li>
								<a href="{{ route('all.user') }}">
									<i class="menu-icon icon-tasks"></i>
									All users
									
								</a>
							</li>
						</ul><!--/.widget-nav-->

						{{-- <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul> --}}<!--/.widget-nav-->

						{{-- <ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
									<li>
										<a href="other-faq.html">
											<i class="icon-inbox"></i>
											Frequently Asked Questions
										</a>
									</li>
									<li>
										<a href="other-404.html">
											<i class="icon-inbox"></i>
											Error Page (404)
										</a>
									</li>
								</ul>
							</li>
							
							
					</ul>
 --}}
						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Category</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									{{-- <a href="#" class="media-avatar medium pull-left">
										<img src="images/user.png">
									</a> --}}
									{{-- under construction form --}}
									<form method="POST" action="{{ route('add.category') }}" enctype="multipart/form-data">
												@csrf
									<div class="media-body">
										<div class="row-fluid">
											{{-- <textarea class="span12" na style="height: 70px; resize: none;"></textarea> --}}
											<input type="text" name="cat_name" class="span12" na style="height: 70px; resize: none;">
										</div>
										<div class="clearfix">
											
											{{-- <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
												<i class="icon-camera shaded"></i>
											</a> --}}
											<a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a photo">
												{{-- <i class="icon-camera shaded"><input type="file" name="cat_image"></i> --}}
												<input type="file" name="cat_image">
											</a>
											

											{{-- <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Upload a video">
												<i class="icon-facetime-video shaded"></i>
											</a> --}}
											{{-- <a href="#" class="btn btn-small" rel="tooltip" data-placement="top" data-original-title="Pin your location">
												<i class="icon-map-marker shaded"></i>
											</a> --}}

											{{-- <a href="#" class="btn btn-primary pull-right">
												Add
											</a> --}}
											<button type="submit" class="btn btn-primary  pull-right">
                                   			 {{ __('Add') }}
                               				 </button>
										</div>
									</div>
									</form>
									{{-- /under construction form --}}

								</div>

								<div class="stream-list">
									{{-- <div class="media stream new-update">
										<a href="#">
											<i class="icon-refresh shaded"></i>
											11 updates
										</a>
									</div> --}}

									{{-- show category --}}
									@foreach ($getCategory as $cat)
									<div class="media stream">
										{{-- <a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a> --}}
										<div class="media-body">
											<div class="stream-headline">
												
													{{-- expr --}}
												
												<h5 class="stream-author">
													{{$cat->cat_name}}
													<br>
													<small>{{$cat->created_at}}</small>
												</h5>
												{{-- <div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
                                                </div> --}}
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="{{URL::to($cat->cat_image)}}" />
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												{{-- <a href="{{ route('edit.category',$cat->id) }}" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Edit
												</a> --}}
												<a href="{{ route('delete.category',$cat->id) }}" class="btn btn-danger btn-small">
													{{-- <i class="icon-reply shaded"></i> --}}
													{{-- <i class=" shaded material-icons"></i> --}}
													Delete
												</a>
												{{-- <a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a> --}}
											</div>
										</div>
										@endforeach
									{{-- /show category --}}

									</div><!--/.media .stream-->


									{{-- <div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
												<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        
                                                        <iframe src="//player.vimeo.com/video/20630217" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                        
                                                        
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div> --}}<!--/.media .stream-->
{{-- 
									<div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>

											<div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
                                            
                                            <div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
                                            <div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>10 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																John Donga 
																<small>12 July 14</small>
															</h5>
															<div class="stream-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text.
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->
											</div><!--/.stream-respond-->
										</div>
									</div> --}}<!--/.media .stream-->
									{{-- <div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div> --}}<!--/.media .stream-->
                                    
                                    {{-- <div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												
                                              
                                                
                                                
                                               

                                                
                                                </div>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="images/img.jpg" />
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div > --}}<!--/.media .stream-->
									{{-- <div class="media stream">
										<a href="#" class="media-avatar medium pull-left">
											<img src="images/user.png">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													John Donga 
													<small>08 July, 2014</small>
												</h5>
												<div class="stream-text">
													 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. 
												</div>
												<div class="stream-attachment video">
													<div class="responsive-video">
														
                                                        
                                                        <iframe src="//player.vimeo.com/video/20630217" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/20630217">Google Car</a> from <a href="http://vimeo.com/user3524956">Henk Rogers</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                                        
                                                        
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="#" class="btn btn-small">
													<i class="icon-thumbs-up shaded"></i>
													Like
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-reply shaded"></i>
													Reply
												</a>
												<a href="#" class="btn btn-small">
													<i class="icon-retweet shaded"></i>
													Repost
												</a>
											</div>
										</div>
									</div> --}}<!--/.media .stream-->

									{{-- <div class="media stream load-more">
										<a href="#">
											<i class="icon-refresh shaded"></i>
											show more...
										</a>
									</div> --}}
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			{{-- <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved. --}}
		</div>
	</div>

	<script src=" {{ asset('adminDash/scripts/jquery-1.9.1.min.js') }}  " type="text/javascript"></script>
	<script src=" {{ asset('adminDash/scripts/jquery-ui-1.10.1.custom.min.js') }}  " type="text/javascript"></script>
	<script src=" {{ asset('adminDash/bootstrap/js/bootstrap.min.js') }} " type="text/javascript"></script>
</body>
