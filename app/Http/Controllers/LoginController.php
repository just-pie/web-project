<?php


namespace App\Http\Controllers;


class LoginController extends Controller
{

    public function showLogin()
    {
        return view('login_page.login');
    }
}