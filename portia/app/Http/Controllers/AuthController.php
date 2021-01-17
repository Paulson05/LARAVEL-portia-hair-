<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthenticatesUser;
class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(AuthenticateUser $auth)
    {
       $auth ->invite();
       return 'sweet - go check the email yo';
    }
}
