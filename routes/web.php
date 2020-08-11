<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
   //return view('welcome');
    return view('webBlogMain');
});*/
Route::get('/','welcomeBlogController@index');


Route::get('/welcome','postController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//multiauth admin
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');





//Route::get('/home/{id}', 'HomeController@index')->name('home');
Route::get('/timeLine/{id}','timeLineController@index')->name('timeLine');


Route::get('/editProfile/{id}','timeLineController@editProfile')->name('editProfile');
Route::post('/updateprofile/{id}','timeLineController@updateprofile')->name('update.profile');


Route::get('/createPost/{id}','postController@createPost')->name('createPost');

//Route::get('/createPost','categoryController@createPost')->name('createPost');

Route::post('/add.post/{id}','postController@addpost')->name('add.post');


//Route::post('/add.post/{u_id}/{c_id}','postController@addpost')->name('add.post');



Route::get('/editPost/{id}','postController@editpost')->name('editPost');
//Route::post('/edit.profile/{id}','postController@editpost')->name('edit.profile');
Route::post('/update.post/{id}','postController@updatepost')->name('update.post');
Route::get('/delete.post/{id}','postController@deletepost')->name('delete.post');
Route::get('/view.post/{id}','postController@viewpost')->name('view.post');

Route::get('/readMyBio/{id}','postController@readMyBio')->name('readMyBio');


//miniBlog.blade.php
Route::get('/cateWisePost/{id}','welcomeBlogController@cateWisePost')->name('cateWisePost');
//comment
Route::post('/comment/{id}','commentController@addComment')->name('comment');





//unser construction
Route::get('/userAbout/{id}','timeLineController@userAbout')->name('userAbout');
// admin 
Route::get('/showcategory','adminController@showCategory')->name('show.category');

Route::post('/addcategory','adminController@addCategory')->name('add.category');

// Route::get('/editcategory/{id}','adminController@editCategory')->name('edit.category');

Route::get('/deletecategory/{id}','adminController@deleteCategory')->name('delete.category');

Route::get('/allPost','adminController@allPost')->name('all.post');
Route::get('/alluser','adminController@allUser')->name('all.user');
Route::get('/deleteUser/{id}','adminController@deleteUser')->name('delete.user');
