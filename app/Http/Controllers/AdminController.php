<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{

    public function showAdmin()
    {

        return \View::make('admin.admin');;
    }

}