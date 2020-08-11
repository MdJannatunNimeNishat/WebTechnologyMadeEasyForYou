<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Post;
use DB;
class welcomeBlogController extends Controller
{
    public function index(){
    	$category = Category::all();
    	
    
        $post = Post::paginate(4);
        $user = User::all();

      
      
         /**/
         $newPost=DB::table('posts')
        ->join('categories','posts.c_id','categories.id')
        ->join('users','posts.u_id','users.id')
       ->selectRaw('posts.post_image as post_image, categories.cat_name as cat_name, posts.title as title, users.image as user_image, users.name as user_name , posts.created_at as created_at , posts.id as post_id, posts.desc as post_desc')->paginate(6);
      //  ->get();
        
         return view('miniBlog',compact('post','user','category','newPost'));
      //  return response()->json($newPost);
         /**/
    }

    //category wise post show 
    public function cateWisePost($id){

    	$category = Category::findorfail($id);
        $allfromCategory = Category::all();
    	
    	$cat_final = DB::table('posts')->where('c_id',$category->id)->get();
    	
    	return view('categoryWiseBlog',compact('cat_final','category', 'allfromCategory'));
        //return view('categoryWiseBlog',compact('cat_final','allfromCategory'));
    	//echo $cat_final;
    }
}
