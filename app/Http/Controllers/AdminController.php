<?php


namespace App\Http\Controllers;

use App\Models\Pouzivatelia;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{

    public function showDashboard()
    {
        $page_name = 'admin.admin_body.admin_dashboard';
        return view('admin.admin')->with('page_name', $page_name);
    }



    public function addUser(){

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

}