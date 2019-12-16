<?php


namespace App\Http\Controllers;

use App\Models\Krajiny;
use App\Models\Oblasti;
use App\Models\Pouzivatelia;
use App\Models\Spravy;
use App\Models\Typvyzvy;
use App\Models\Univerzity;
use App\Models\Vyzvy;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function showDashboard()
    {

        $page_name = 'admin.admin_body.admin_dashboard';
        
       // SELECT DISTINCT country_iso2, COUNT(id) pocet FROM `visitors` GROUP BY country_iso2 ORDER BY pocet DESC
        $navstevnici_v_krajinach = DB::table('visitors')
            ->select('country_iso2', DB::raw("COUNT(id) as pocet"))
            ->groupBy('country_iso2')
            ->orderBy('pocet', 'DESC')
            ->get();

        // SELECT browsers, COUNT(id) as pocet FROM `visitors` group by browsers order by pocet desc
        $browsers_bar = DB::table('visitors')
            ->select('browsers', DB::raw("COUNT(id) as pocet"))
            ->groupBy('browsers')
            ->orderBy('pocet', 'DESC')
            ->get();

        // SELECT hour(date_time) as hodina, COUNT(id) as pocet FROM `visitors` GROUP by hodina ORDER by hodina asc

        $hodiny_navstev = DB::table('visitors')
            ->select( DB::raw("hour(date_time) as hodina"), DB::raw("COUNT(id) as pocet"))
            ->groupBy('hodina')
            ->orderBy('hodina', 'asc')
            ->get();

        $data = [
            'page_name'  => $page_name,
            'navstevnici_v_krajinach' => $navstevnici_v_krajinach,
            'browsers_bar' => $browsers_bar,
            'hodiny_navstev' =>$hodiny_navstev
        ];

        return view('admin.admin')->with($data);
    }



    public function addUser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $birthday = $request->input('birth_date');
        $password = $request->input('heslo');
        $role = $request->input('rola');

        $hashed = bcrypt($password);


        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->birth_date = $birthday;
        $user->password = $hashed;
        $user->roly_idroly = $role;
        $user->save();

        $msg = 'Nový používateľ bol <strong>úspešne</strong> pridaný!';
        return back()->with('message', $msg);
    }

    public function showUsers()
    {
        $countRecentlyAddedUsers = $this->countRecentlyAddedUsers();
        $countAllUsers = $this->countAllUsers();

        $page_name = 'admin.admin_body.admin_users';
        $users = DB::table('users')
            ->select(['users.id', 'users.name', 'users.email', 'users.birth_date', 'users.isAdmin', 'users.foto', 'roly.rola', 'users.created_at', 'users.updated_at'])
            ->join('roly', 'roly.idroly', '=', 'users.roly_idroly')
            ->get();

        $data = [
            'page_name'  => $page_name,
            'countRecentlyAddedUsers'   => $countRecentlyAddedUsers,
            'countAllUsers' => $countAllUsers,

        ];

        return view("admin.admin", ['users'=>$users])->with($data);
    }

    public function editUser(Request $request){

        $user = User::findOrFail($request->input('id'));
        $user->update($request->all());

        $user = Pouzivatelia::where("id", "=", $request->input('id'))->first();
        $user->update(['meno' => $request->input('name'),
            'email' => $request->input('email'),
            'birth_date' => $request->input('birth_date'),
            'roly_idroly' => $request->input('rola')]);

        $msg = 'Dáta o používateľovi <em>'.$request->input('name').' '.$request->input('priezvisko').'</em> boli <strong>úspešne</strong> aktualizované!';
        return back()->with('message', $msg);
    }

    public function deleteUser(Request $request){
        $user = User::findOrFail($request->input('id'));
        $user->delete();
        $msg = 'Používateľ bol <strong>úspešne</strong> vymazaný z databázy!';
        return back()->with('message', $msg);
    }

    public function countRecentlyAddedUsers(){
        $count = DB::table('users')
            ->select(DB::raw('COUNT(*) as pocet'))
            ->where('created_at', '>', 'NOW() - INTERVAL 7 DAY')
            ->value('pocet');

        return $count;
}

public function countAllUsers(){
    $count = DB::table('users')
        ->select(DB::raw('COUNT(*) as pocet'))
        ->value('pocet');

    return $count;
}

    public function showDocumentation(){
        $page_name = 'admin.admin_body.admin_documentation';

        $data = [
            'page_name'  => $page_name,

        ];

        return view('admin.admin')->with($data);

    }
    public function showMessages(){
        $page_name = 'admin.admin_body.admin_mess';

        $spravy = Spravy::orderBy('datum', 'desc')->get();
        $vyzvy = Vyzvy::all()->sortByDesc('pridane');

        $data = [
            'page_name'  => $page_name,
            'spravy' => $spravy,
            'vyzvy' => $vyzvy
        ];

        return view('admin.admin')->with($data);
    }
    public function showChallenges(){
        $vyzvy = Vyzvy::all();
        $oblasti = Oblasti::orderBy('nazov', 'asc')->get();
        $typvyzvy = Typvyzvy::orderBy('typ', 'asc')->get();
        $univerzity = Univerzity::orderBy('nazov', 'asc')->get();

        $page_name = 'admin.admin_body.admin_challenges';

        $data = [
            'page_name'  => $page_name,
            'oblasti' => $oblasti,
            'typvyzvy' => $typvyzvy,
            'univerzity' => $univerzity,
            'vyzvy' => $vyzvy
        ];

        return view('admin.admin')->with($data);
    }
    public function showUniversities(){
        $page_name = 'admin.admin_body.admin_university';
        $countries = Krajiny::all(); // pre mapku

        // SELECT univerzity.iduniverzity, univerzity.nazov, univerzity.foto, univerzity.zmluvaod, univerzity.zmluvado, univerzity.mesto, krajiny.krajina FROM `univerzity` Inner join krajiny on univerzity.krajiny_idkrajiny = krajiny.idkrajiny
        $univerzity = DB::table('univerzity')
            ->select('univerzity.iduniverzity as id', 'univerzity.nazov as nazov','univerzity.foto', 'univerzity.zmluvaod', 'univerzity.zmluvado', 'univerzity.mesto', 'krajiny.krajina')
            ->join('krajiny','krajiny.idkrajiny', '=', 'univerzity.krajiny_idkrajiny')
            ->orderBy('id')
            ->get();
        // SELECT krajiny.idkrajiny as id, krajiny.krajina as krajina, COUNT(univerzity.krajiny_idkrajiny) as pocet FROM `krajiny` INNER JOIN univerzity ON idkrajiny = univerzity.krajiny_idkrajiny GROUP BY krajina ORDER BY id

        $univerzity_v_krajinach = DB::table('krajiny')
            ->select('krajiny.idkrajiny as id', 'krajiny.krajina as krajina','krajiny.iso2 as iso2', DB::raw("COUNT(univerzity.krajiny_idkrajiny) as pocet"))
            ->join('univerzity','krajiny.idkrajiny', '=', 'univerzity.krajiny_idkrajiny')
            ->groupBy('krajina')
            ->orderBy('id')
            ->get();

        $data = [
            'page_name'  => $page_name,
            'univerzity' => $univerzity,
            'univerzity_v_krajinach' => $univerzity_v_krajinach
        ];

        return view('admin.admin', compact('countries'))->with($data);
    }

    public function addVyzva(Request $request){

        $imageName = $request->file('filename')->getClientOriginalName();
        $request->file('filename')->move(public_path('images/vyzvy'), $imageName);

        $vyzvy = new Vyzvy();
        $vyzvy->timestamps = false;
        $vyzvy->nazov = $request->input('nazov');
        $vyzvy->popis = $request->input('popis');
        $vyzvy->ostatneinfo = $request->input('ostatneinfo');
        $vyzvy->dlzka = $request->input('dlzka');
        $vyzvy->pridane = date('Y-m-d');
        $vyzvy->platnedo = $request->input('platnedo');
        $vyzvy->foto = "images/vyzvy/" . $imageName;
        $vyzvy->oblasti_idoblasti = $request->input('oblast');
        $vyzvy->typvyzvy_idtypvyzvy = $request->input('typvyzvy');
        $vyzvy->save();

        $univerzity = $request->get('univerzity');;
        foreach ($univerzity as $item){
            $vyzvy->univerzity()->attach($item);
        }

        return redirect()->back()->with('message','Nový riadok bol úspešne pridaný!');
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('index');
    }

}