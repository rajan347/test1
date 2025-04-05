<?php

namespace App\Http\Controllers\Auth;

use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;

use DateTime;
use Auth;
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



public function authenticated(Request $request, $user) {
    $user->last_login = Carbon::now();
    $user->save();
}
    //protected $redirectTo ='/dashboard';

 public function redirectTo()
    {
               // echo '<pre>';print_r($str);exit;
       if (auth()->user()) {
        $id = Auth::user()->id;
//`$redirectTo = '/profile/$id';`
          return ('/edit_profile/'.$id); 
        
        } 
          
           
        
        } 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
 public function userLogout()
        {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
