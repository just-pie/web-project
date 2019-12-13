<?php

namespace App\Http\Controllers;

use App\Models\Univerzity;
use App\Models\Vyzvy;

class UniverzityController extends Controller
{
    public function showUniverzity()
    {
        $univerzity = Univerzity::orderBy('nazov', 'asc')->get();
        return view("univerzity", ['univerzity' => $univerzity]);
    }

    public function showUniverzita($id)
    {
        $univerzita = Univerzity::find($id);
        return view("univerzita", ['univerzita' => $univerzita]);
    }
}