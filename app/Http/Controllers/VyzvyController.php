<?php

namespace App\Http\Controllers;

use App\Models\Vyzvy;

class VyzvyController extends Controller
{
    public function showVyzvy()
    {
        $vyzvy = Vyzvy::all();
        return view("vyzvy", ['vyzvy' => $vyzvy]);
    }

    public function showVyzva($id)
    {
        $vyzva = Vyzvy::find($id);
        return view("vyzva", ['vyzva' => $vyzva]);
    }
}