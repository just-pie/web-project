<?php

namespace App\Http\Controllers;

use App\Models\Spravy;

class SpravyController extends Controller
{
    public function showSpravy()
    {
        $spravy = Spravy::all();
        return view("spravy", ['spravy' => $spravy]);
    }

    public function showSprava($id)
    {
        $sprava = Spravy::find($id);
        return view("sprava", ['sprava' => $sprava]);
    }
}