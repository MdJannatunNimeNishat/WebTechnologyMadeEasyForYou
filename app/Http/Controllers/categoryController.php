<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   /*  public function getCategory(){

    	 $category = Category::all();
    	 //return view('raw',compact('category'));
    	 return view('createPost',compact('category'));
    	

    	
    } */
    public function createPost(){
        $category = Category::all();
    	 return view('createPost',compact('category'));
    
    }

}
