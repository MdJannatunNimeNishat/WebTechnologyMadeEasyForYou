<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
   // protected $redirectTo = RouteServiceProvider::newHome;
    //protected $redirectTo ='newHome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   




    // for social lite



     public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        // $user->token;
        return  $user->token;
    }

    //new added
        public function login(Request $request)

    {   

        $input = $request->all();

   

        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);

   

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))

        {

            if (auth()->user()->is_admin == 1) {

               return redirect()->route('admin.home');
              //  echo 'admin';

            }else{

                return redirect()->route('home');
              //  echo 'user';

            }

        }else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }

          

    }
}
