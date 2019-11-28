<?php

namespace App\Http\Controllers\Auth;

use App\Models\Pouzivatelia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pouzivatelia',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Pouzivatelia
     */
    protected function create(array $data)
    {
//        $user = new Pouzivatelia();
//        $user->meno = $data['name'];
//        $user->email = $data['email'];
//
//        $user->heslo = bcrypt($data['password']);
//        $user->save();

        return Pouzivatelia::create([
            'meno' => $data['name'],
            'priezvisko' => 'priezvisko',
            'datum_narodenia' => '1999-05-22',
            'login' => '111111',
            'roly_idroly' => '2',
            'email' => $data['email'],
            'heslo' => bcrypt($data['password']),
        ]);
    }
}
