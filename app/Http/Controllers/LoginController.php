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
    public function checkLogin(Request $request)
    {
        $this->validate($request,
            ['username' => 'required|email'],
            ['password' => 'required|alphaNum|min:6']);

        $user_data = array(
            'email' => $request->get('username'),
            'heslo' =>$request->get('password')
            );

        if(Auth::attempt($user_data))
        {
            return redirect('index');
        }
        else
        {
            return back()->with('error', 'Chybné prihlasovacie údaje');
        }
    }

    public function successLogin()
    {
        return view('index');
    }

    function logout()
    {
        Auth::logout();
        return redirect('index');
    }
}