<?php


namespace App\Http\Controllers;

use App\Models\Pouzivatelia;
use App\User;
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

        $user = new User();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->datum_narodenia = $birthday;
        $user->login = $login;
        $user->heslo = $hashed;
        $user->roly_idroly = $role;
        $user->save();
        $msg = 'Nový používateľ bol <strong>úspešne</strong> pridaný!';
        return back()->with('message', $msg);
    }

    public function showUsers()
    {
        $countRecentlyAddedUsers = $this->countRecentlyAddedUsers();
        $countThisHourAddedUsers = $this->countThisHourAddedUsers();
        $countAllUsers = $this->countAllUsers();

        $page_name = 'admin.admin_body.admin_users';
        $users = \DB::table('users')
            ->select(['users.id', 'users.name', 'users.email', 'users.birth_date', 'users.isAdmin', 'users.foto', 'roly.rola', 'users.created_at', 'users.updated_at'])
            ->join('roly', 'roly.idroly', '=', 'users.roly_idroly')
            ->get();

        $data = [
            'page_name'  => $page_name,
            'countRecentlyAddedUsers'   => $countRecentlyAddedUsers,
            'countThisHourAddedUsers'   => $countThisHourAddedUsers,
            'countAllUsers' => $countAllUsers,

        ];

        return view("admin.admin", ['users'=>$users])->with($data);
    }

    public function editUser(Request $request){

        $user = User::findOrFail($request->input('id'));
        $user->update($request->all());

        /*$user = Pouzivatelia::where("idpouzivatelia", "=", $request->input('idpouzivatelia'))->first();
        $user->update(['meno' => $request->input('meno'),
            'priezvisko' => $request->input('priezvisko'),
            'email' => $request->input('email'),
            'datum_narodenia' => $request->input('datum_narodenia'),
            'roly_idroly' => $request->input('rola')]);*/

        $msg = 'Dáta o používateľovi <em>'.$request->input('name').' '.$request->input('priezvisko').'</em> boli <strong>úspešne</strong> aktualizované!';
        echo "som tu!";
        return back()->with('message', $msg);
    }

    public function deleteUser(Request $request){
        $user = User::findOrFail($request->input('id'));
        $user->delete();
        $msg = 'Používateľ bol <strong>úspešne</strong> vymazaný z databázy!';
        return back()->with('message', $msg);
    }

    public function countRecentlyAddedUsers(){
        $count = \DB::table('users')
            ->select(\DB::raw('COUNT(*) as pocet'))
            ->where('created_at', '>', 'NOW() - INTERVAL 7 DAY')
            ->value('pocet');

        return $count;
}
    public function countThisHourAddedUsers(){
        $count = \DB::table('users')
            ->select(\DB::raw('COUNT(*) as pocet'))
            ->where(\DB::raw('DATE(created_at)', '=', 'DATE(NOW())'))
            ->where(\DB::raw('HOUR(created_at)', '=', 'HOUR(NOW())'))
            ->value('pocet');

        error_log('Some message here.');
        return $count;
    }

public function countAllUsers(){
    $count = \DB::table('users')
        ->select(\DB::raw('COUNT(*) as pocet'))
        ->value('pocet');

    return $count;
}

    public function showDocumentation(){
        $page_name = 'admin.admin_body.admin_documentation';

        $countThisHourAddedUsers = $this->countThisHourAddedUsers();

        $data = [
            'page_name'  => $page_name,
            'countThisHourAddedUsers'   => $countThisHourAddedUsers

        ];

        return view('admin.admin')->with($data);
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('index');
    }

}