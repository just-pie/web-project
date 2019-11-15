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
        $countThisHourAddedUsers = $this->countThisHourAddedUsers();

        $page_name = 'admin.admin_body.admin_dashboard';

        $data = [
            'page_name'  => $page_name,
            'countThisHourAddedUsers'   => $countThisHourAddedUsers

        ];

        return view('admin.admin')->with($data);
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
        $countRecentlyAddedUsers = $this->countRecentlyAddedUsers();
        $countThisHourAddedUsers = $this->countThisHourAddedUsers();
        $countAllUsers = $this->countAllUsers();

        $page_name = 'admin.admin_body.admin_users';
        $users = \DB::table('pouzivatelia')
            ->select(['pouzivatelia.idpouzivatelia', 'pouzivatelia.meno', 'pouzivatelia.priezvisko', 'pouzivatelia.email', 'pouzivatelia.datum_narodenia', 'roly.rola'])
            ->join('roly', 'roly.idroly', '=', 'pouzivatelia.roly_idroly')
            ->get();

        $data = [
            'page_name'  => $page_name,
            'countRecentlyAddedUsers'   => $countRecentlyAddedUsers,
            'countThisHourAddedUsers'   => $countThisHourAddedUsers,
            'countAllUsers' => $countAllUsers,

        ];

        return view("admin.admin", ['users'=>$users])->with($data);
    }

    public function countRecentlyAddedUsers(){
        $count = \DB::table('pouzivatelia')
            ->select(\DB::raw('COUNT(*) as pocet'))
            ->where('created_at', '>', 'NOW() - INTERVAL 7 DAY')
            ->value('pocet');

        return $count;
}
    public function countThisHourAddedUsers(){
        $count = \DB::table('pouzivatelia')
            ->select(\DB::raw('COUNT(*) as pocet'))
            ->where('created_at', '>', 'DATE_SUB(CURDATE(), INTERVAL 1 HOUR)')
            ->value('pocet');

        return $count;
    }

public function countAllUsers(){
    $count = \DB::table('pouzivatelia')
        ->select(\DB::raw('COUNT(*) as pocet'))
        ->value('pocet');

    return $count;
}

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('index');
    }

}