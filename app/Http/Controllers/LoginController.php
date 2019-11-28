<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Aws\Api\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function showLogin()
    {
        return view('login_page.login');
    }

    public function showRegister()
    {
        return view('login_page.register');
    }

    function logout()
    {
        Auth::logout();
        return redirect('index');
    }
}