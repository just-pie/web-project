<?php


namespace App\Http\Controllers;

use App\Models\Pouzivatelia;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function showDashboard()
    {
        $page_name = 'admin.admin_body.admin_dashboard';
        return view('admin.admin')->with('page_name', $page_name);
    }



    public function addUser(Request $request){
        $firstname = $request->input('meno');
        $lastname = $request->input('priezvisko');
        $email = $request->input('email');
        $birthday = $request->input('datum_narodenia');
        $login = $request->input('login');
        $password = $request->input('heslo');
        $role = $request->input('rola');

        $hashed = bcrypt($password);

        $user = new Pouzivatelia();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->datum_narodenia = $birthday;
        $user->login = $login;
        $user->heslo = $hashed;
        $user->roly_idroly = $role;
        $user->save();

        return $this->showUsers();
    }

    public function showUsers()
    {
        $page_name = 'admin.admin_body.admin_users';
        $users = \DB::table('pouzivatelia')
            ->select(['pouzivatelia.idpouzivatelia', 'pouzivatelia.meno', 'pouzivatelia.priezvisko', 'pouzivatelia.email', 'pouzivatelia.datum_narodenia', 'roly.rola'])
            ->join('roly', 'roly.idroly', '=', 'pouzivatelia.roly_idroly')
            ->get();

        return view("admin.admin", ['users'=>$users])->with('page_name', $page_name);
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('index');
    }

}