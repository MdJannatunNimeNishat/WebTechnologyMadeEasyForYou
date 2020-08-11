<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Post;
use DB;
class postController extends Controller
{


    public function welcome(){
      
        

        $category = Category::all();
        
        
       
        $post = Post::paginate(4);
        $user = User::all();

          $newPost=DB::table('posts')
        ->join('categories','posts.c_id','categories.id')
        ->join('users','posts.u_id','users.id')
        ->selectRaw('posts.post_image as post_image, categories.cat_name as cat_name, posts.title as title, users.image as user_image, users.name as user_name , posts.created_at as created_at , posts.id as post_id, posts.desc as post_desc')->paginate(6);
        // ->get();
        


         return view('miniBlog',compact('post','user','category','newPost'));
       //  return response()->json($newPost);
    }




    public function createPost($id){
    	$id= User::findorfail($id);

        $category = Category::all();
         return view('createPost',compact('category','id'));
    
    }
    public function addpost(Request $request,$id){
    //public function addpost(Request $request,$u_id,$c_id){
    	 $user = new Post;
    		$user->u_id = $id;
            $user->c_id = $request->category;;
 			$user->title = $request->title;
 			// $user->category = $request->category;
 			$user->desc = $request->desc;
 			$image = $request->image;
 			
 		/**/
 			//generating a random name 
        $image_name = hexdec(uniqid()); 
        //taking the img extension and convert it to lower string
        $ext= strtolower($image->getClientOriginalExtension());
        //concat the generated name with extension
        $image_full_name= $image_name.'.'.$ext;
        //geting the upload path
     //   $upload_path='fontend/images/';
        $upload_path='blogFontEnd/postImage/';
        //concat the $image_full_name and $upload_path
        $image_url=$upload_path.$image_full_name;
        //it's mainly move our image to the path with name
        $sucess = $image->move($upload_path,$image_full_name);
 		/**/
 			
 			$user->post_image = $image_url;
 		$user->save();
 	 	return Redirect()->route('home');
    }




    public function editpost($id){
        $post = Post::findorfail($id);
        $category = Category::all();
        return view('editPost',compact('post','category'));
    }




    public function updatepost(Request $request,$id){
        
        $user = Post::findorfail($id);
        $user->title=$request->title;
      //  $user->category=$request->category;
        $user->desc=$request->desc;
        $image=$request->image;
        
      
        //generating a random name 
        $image_name = hexdec(uniqid()); 
        //taking the img extension and convert it to lower string
        $ext= strtolower($image->getClientOriginalExtension());
        //concat the generated name with extension
        $image_full_name= $image_name.'.'.$ext;
        //geting the upload path
        $upload_path='blogFontEnd/postImage/';
        //concat the $image_full_name and $upload_path
        $image_url=$upload_path.$image_full_name;
        //it's mainly move our image to the path with name
        $sucess = $image->move($upload_path,$image_full_name);
        
        $user->post_image = $image_url;
          unlink($request->old_photo);
        
          $user->save();
          if($user){
            return Redirect()->route('home');
        }else{
            echo 'error';
        }
        
    }

    public function deletepost($id){
        $delete = Post::findorfail($id);
        $image = $delete->post_image;
        
       // return response()->json($image);
        $delete-> delete();
      

        if($delete){
                unlink($image);
                return back();
            }else{
                echo "error";

            }
    }

    public function viewpost($id){
        $post = Post:: findorfail($id);
        $category = Category::all();
        //it take first 2 posts from post table
        $allPost = Post::skip(0)->take(2)->get();
       
        $u_id = $post->u_id;
        

       
          $user = DB::table('users')->where('id', $u_id)->get();
         // $relatedCat = $post->category;
         // $relatedPost = DB::table('posts')->where('category',$relatedCat)->skip(0)->take(3)->get();

         $relatedCat = $post->c_id;
        $relatedPost = DB::table('posts')->where('c_id',$relatedCat)->skip(0)->take(3)->get();

        //comment
        $postID = $id; 
          $comment = DB::table('comments')->where('post_id',$postID)->get();
        //new
         $countComment = count($comment);
        // return response()->json($relatedPost);
      return view('single',compact('post','category','user','allPost','relatedPost','comment','count','countComment'));

        //
    //  return view('single',compact('post','category','user','allPost','relatedPost','comment'));
         // return response()->json($relatedPost);
     
    }

    //post author bio 
    public function readMyBio($id){
        $user = User::findorfail($id);
        $u_id = $user->id;
        $post = DB::table('posts')->where('u_id',$u_id)->get();
        $category = Category::all();
        return view('userBio',compact('user','category','post'));
        // return view('miniBlog',compact('post','user','category'));

    }
}
