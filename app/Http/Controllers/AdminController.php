<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/24/15
 * Time: 12:45 AM
 */

namespace app\Http\Controllers;

use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class AdminController extends  Controller{

    public function getIndex()
    {
        return view('admin.home');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}