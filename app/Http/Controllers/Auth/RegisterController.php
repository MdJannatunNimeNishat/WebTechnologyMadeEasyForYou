<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            /**/
            'fieldOfInterest' => ['required', 'string', 'max:100'],

            /**/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'fieldOfInterest' => $data['fieldOfInterest'],
            //'image' => $date['image'],

        ]);
        /*$image_url = 'null';
        if(request()->hasFile('image')){

            $image= request()->file('image')->getClientOriginalName();
            request()->file('image')->storeAs('image',$user->id.'/'.$image);
        }*/
            /**/
        /*$image= request()->file('image');

             $image_name = hexdec(uniqid()); 
        //taking the img extension and convert it to lower string
        $ext= strtolower($image->getClientOriginalExtension());
        //concat the generated name with extension
        $image_full_name= $image_name.'.'.$ext;
        //geting the upload path
        $upload_path='fontend/images/';
        //concat the $image_full_name and $upload_path
        $image_url=$upload_path.$image_full_name;
        //it's mainly move our image to the path with name
        $sucess = $image->move($upload_path,$image_full_name);*/
        
        
        /*$user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'fieldOfInterest' => $data['fieldOfInterest'],
            'image' => $image_url,

        ]);*/
        return $user;
    }
}
