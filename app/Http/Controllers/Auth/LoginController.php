<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    public function redirectTo(){
        $user = \Auth::user();

        switch ($user->role_id){
            case 1:
                return 'admin';
                    break;
            case 2:
                return 'sales';
                break;
            case 3:
                return 'finance';
                break;
            case 4:
                return 'maintenance';
                break;
            case 5:
                return 'head-maintenance';
                break;
            case 6:
                return 'supplier';
                break;
            case 7:
                return 'ceo';
                break;
            case 8:
                return 'customer';
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   

}
