<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Category;
 use App\User;
 use App\Post;
 use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //  $user = User::findorfail($id)
       // return view('home',compact('user'));
        
        return view('home');
   
    }


    public function adminHome()

    {
        $user = User::all();
        $post = Post::all();
        $countUser = count($user);
        $countPost = count($post);

        // return view('admin.adminDashBoard');
        return view('admin.adminDashBoard',compact('countUser','countPost'));

    }

    
   /* public function category(){
        //$category = category::findorfail($id);
        $category= Category::all();
        //return response()->json($student);
        return view('raw',compact('category'));
       // return response()->json($category);
    }*/


}
