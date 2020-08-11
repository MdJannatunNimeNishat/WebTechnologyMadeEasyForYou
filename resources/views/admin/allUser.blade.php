<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin home</title>
        <link type="text/css" href=" {{asset('adminDash/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
        <link type="text/css" href=" {{asset('adminDash/bootstrap/css/bootstrap-responsive.min.css')}} " rel="stylesheet">
        <link type="text/css" href=" {{asset('adminDash/css/theme.css')}} " rel="stylesheet">
        <link type="text/css" href=" {{asset('adminDash/images/icons/css/font-awesome.css')}} " rel="stylesheet"> 
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{route('admin.home')}}">Admin</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
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
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="  {{ route('admin.home') }}"><i class="menu-icon icon-dashboard"></i>Home
                                    {{--  --}}



                                    {{--  --}}
                                </a></li>
                                <li><a href="{{ route('show.category') }}"><i class="menu-icon icon-bullhorn"></i>Add Category </a>
                                </li>
                                <li><a href="{{ route('all.post') }}"><i class="menu-icon icon-inbox"></i>All Posts </a></li>

                                <li><a href="{{ route('all.user') }}"><i class="menu-icon icon-tasks"></i>All User</a></li>

                            </ul>
                            <!--/.widget-nav-->
                           {{--  <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul> --}}
                            <!--/.widget-nav-->
                           {{--  <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul> --}}
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                       Posts</h3>
                                </div>
                              
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>

                                            <tr class="heading">
                                                <td class="cell-check">
                                                    {{-- <input type="checkbox" class="inbox-checkbox"> --}}
                                                    {{--  --}}
                                                    {{-- <a href="#" class="btn  btn-small">Delete</a> --}}
                                                    {{--  --}}
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                   User Name
                                                </td> 

                                                <td class="cell-author hidden-phone hidden-tablet">
                                                   email
                                                </td>
                                                <td class="cell-title">
                                                    Image
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    Date
                                                </td>
                                            </tr>
                                            @foreach ($allUser as $user)
                                               
                                            
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    {{-- <input type="checkbox" class="inbox-checkbox"> --}}
                                                    <a href="{{ route('delete.user',$user->id) }}" class="btn-danger  btn-small">Delete</a>
                                                </td>
                                                <td class="cell-icon">
                                                    {{-- <i class="icon-star"></i> --}}
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    {{$user->name}}
                                                </td>

                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    {{$user->email}}
                                                </td>
                                                <td class="cell-title">
                                                    
                                                   <img src="{{URL::to($user->image)}}" style="height: 50px; width: 50px;"> 
                                                    
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    {{$user->created_at}}
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                         {{--  --}}
                                          
                                     
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                {{-- <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved. --}}
            </div>
        </div>
        <script src=" {{asset('adminDash/scripts/jquery-1.9.1.min.js')}} " type="text/javascript"></script>
        <script src=" {{asset('adminDash/scripts/jquery-ui-1.10.1.custom.min.js')}} " type="text/javascript"></script>
        <script src=" {{asset('adminDash/bootstrap/js/bootstrap.min.js')}} " type="text/javascript"></script>
    </body>
