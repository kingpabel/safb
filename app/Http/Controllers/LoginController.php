<?php

namespace app\Http\Controllers;

use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class LoginController extends  Controller{

    public function postCheckUser()
    {
        $credentials = array(
            'user_email' => Input::get('email'),
            'password' => Input::get('password'),
            'status' => 1
        );
//         Config::set('auth.model', 'CompanyUser');
        if(Auth::attempt( $credentials ))
        {
                return redirect()->intended('admin');
        }
        else
        {
            Session::flash('flashError', 'Your Email or Password Invalid');
            return redirect('/');
        }
    }
}