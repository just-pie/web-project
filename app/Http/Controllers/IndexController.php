<?php

namespace App\Http\Controllers;

use App\Models\Spravy;
use App\Models\Vyzvy;

class IndexController extends Controller
{
    public function showVyzvy()
    {
        $vyzvy = Vyzvy::inRandomOrder()->limit(7)->get();
        $poslvyzvy = Vyzvy::orderBy('pridane', 'desc')->take(3)->get();
        $spravy = Spravy::inRandomOrder()->limit(2)->get();
        return view("index", ['vyzvy' => $vyzvy,
            'spravy' => $spravy,
            'poslvyzvy' => $poslvyzvy]);
    }

}