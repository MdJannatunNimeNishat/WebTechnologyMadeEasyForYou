<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
class adminController extends Controller
{
    public function showCategory(){
    	$getCategory = Category::all();
    	return view('admin.addCategory',compact('getCategory'));
    }

    public function addCategory(Request $request){
    	$category = new  Category;
    	$category->cat_name = $request->cat_name;
    //	$cat_image = $request->cat_image;
    	//return response()->json($cat_image);
    	//echo $cat_image;
    	$image = $request->cat_image;
 			
 		/**/
 			//generating a random name 
        $image_name = hexdec(uniqid()); 
        //taking the img extension and convert it to lower string
        $ext= strtolower($image->getClientOriginalExtension());
        //concat the generated name with extension
        $image_full_name= $image_name.'.'.$ext;
        //geting the upload path
     //   $upload_path='fontend/images/';
        $upload_path='blogFontEnd/cat_image/';
        //concat the $image_full_name and $upload_path
        $image_url=$upload_path.$image_full_name;
        //it's mainly move our image to the path with name
        $sucess = $image->move($upload_path,$image_full_name);
 		/**/
 			
 		$category->cat_image = $image_url;
 		$category->save();
 	 	return Redirect()->route('show.category');
    }

  /*  public function edit($id){

    }*/

    public function deleteCategory($id){
    	$delete = Category::findorfail($id);
        $image = $delete->cat_image;
        
       // return response()->json($image);
        $delete-> delete();
      

        if($delete){
                unlink($image);
                return back();
            }else{
                echo "error";

            }

    }


    public function allPost(){
    	$allPost = Post::all();
    	return view('admin.allPost',compact('allPost')); 
    }


    public function allUser(){
    	$allUser = User::all();
    	return view('admin.allUser',compact('allUser'));
    }

    public function deleteUser($id){
    	$delete = User::findorfail($id);
    	$image = $delete->image;
    	$delete->delete();
    	if($delete){
                unlink($image);
                return back();
            }else{
                echo "error";

            }

    }

}
