<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Category;
use DB;
class commentController extends Controller
{
    public function addComment(Request $request,$id)
    {
    	$postID=$id;
    	$comment = new Comment;
    	$comment->commentAuthorName=$request->name;
    	$comment->commentAuthorEmail=$request->email;
    	$comment->comment=$request->comment;
    	$comment->post_id=$postID;
    	//$comment->commentAuthorName=$request->name;
    	$comment->save();
    	//return response()->json($comment);
    //	Session::flash('sucess','comment was added');
    	//return redirect()->back();
    	
    	/**/

        $category = Category::all();
        //it take first 2 posts from post table
        $allPost = Post::skip(0)->take(2)->get();
       $post = Post::findorfail($postID);
        $u_id = $post->u_id;
        

       
          $user = DB::table('users')->where('id', $u_id)->get();
         // $relatedCat = $post->category;
         // $relatedPost = DB::table('posts')->where('category',$relatedCat)->skip(0)->take(3)->get();

         $relatedCat = $post->c_id;
        $relatedPost = DB::table('posts')->where('c_id',$relatedCat)->skip(0)->take(3)->get();
        //get comment
        $comment = DB::table('comments')->where('post_id',$postID)->get();
        $countComment = count($comment);
       return view('single',compact('post','category','user','allPost','relatedPost','comment','countComment'));
    	/**/
    
    }
}
