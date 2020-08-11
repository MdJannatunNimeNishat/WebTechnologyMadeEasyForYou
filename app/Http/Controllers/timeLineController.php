<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Middleware\Authenticate;
use App\User;
use App\Post;
use App\Category;

use DB;
use Illuminate\Support\Facades\Hash;
//use App\Category;
class timeLineController extends Controller
{	

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
       
        $id = $id;
      //  $user = Post::findorfail($id);
      // $u_id = $user->id;
      // $post = Post::findorfail($u_id);
      //  return response()->json($id);

     //  $timeLine = Post::findorfail($id);
       // $categpry = DB::table('categories')->get();
         $timeLine = DB::table('posts')->where('u_id', $id)->get();
       //   $cat_id = $timeLine->c_id;
         // $cat_id = $timeLine->title;
       //   $category = DB::table('categores')->where('id',$cat_id)->get();
        //  return response()->json($raw);
        //  return response()->json($timeLine);
           return view('timeLine',compact('timeLine'));
       //  return view('timeLine',compact('timeLine','category'));
           /**/
       
           
           /* $post=DB::table('posts')
            ->join('categories','posts.c_id','categories.id')
            ->select('posts.*','categories.name')
            ->get();
             return view('blog.allPost',compact('post'));
    */
           /**/

    }

    

    public function editProfile($id){
    	$id = User::findorfail($id);
    	return view('editProfile',compact('id'));
    }


    public function updateprofile(Request $request,$id){
    	$user = User::findorfail($id);
    	$user->name=$request->name;
    	$user->email=$request->email;

    	$user->fieldOfInterest=$request->fieldOfInterest;
    	$image=$request->image;
    	//$user->password=$request->password;

       // $password=$request->password;
       // $password = Hash::make($password);
      //  $user->password=$password;

        
        /**/
         //generating a random name 
        $image_name = hexdec(uniqid()); 
        //taking the img extension and convert it to lower string
        $ext= strtolower($image->getClientOriginalExtension());
        //concat the generated name with extension
        $image_full_name= $image_name.'.'.$ext;
        //geting the upload path
     //   $upload_path='fontend/images/';
        $upload_path='blogFontEnd/userImage/';
        //concat the $image_full_name and $upload_path
        $image_url=$upload_path.$image_full_name;
        //it's mainly move our image to the path with name
         $sucess = $image->move($upload_path,$image_full_name);
        
        $user->image = $image_url;
        $old_user = User::findorfail($id);
        $old_image = $old_user->image;
        // return response()->json($old_image);
         /*n*/
        /* if($old_image!='null'){
          unlink($old_image);
          $user->save();
          return Redirect()->route('home');
         }else{
          $user->save();
          return Redirect()->route('home');
         }*/
         /*n*/
         /*new*/
         if($old_image=='null'){
            $user->save();
          return Redirect()->route('home');
         }else{
        
         // unlink($old_image);
          $user->save();
          return Redirect()->route('home');
         }
         /*/new*/
         
      
}
  public function userAbout($id){
      $userAbout = Post::findorfail($id);
      return view('userAbout',constant('userAbout'));
  }

    
}
