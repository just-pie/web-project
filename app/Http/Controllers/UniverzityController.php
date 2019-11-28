<?php

namespace App\Http\Controllers;

use App\Models\Univerzity;
use App\Models\Vyzvy;

class UniverzityController extends Controller
{
    public function showAction($id)
    {
        $vyzvy = Vyzvy::find($id);
        echo $vyzvy->typvyzvy;
    }

    public function showUniverzita($id)
    {
        $univerzita = Univerzity::find($id);
        return view("univerzita", ['univerzita' => $univerzita]);
    }
}