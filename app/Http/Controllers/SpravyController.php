<?php

namespace App\Http\Controllers;

use App\Models\Spravy;
use App\Models\Vyzvy;
use Illuminate\Http\Request;

class SpravyController extends Controller
{
    public function showSpravy()
    {
        $spravy = Spravy::orderBy('datum', 'desc')->take(10)->get();
        $vyzvy = Vyzvy::all()->sortByDesc('pridane');
        return view("spravy", ['spravy' => $spravy, 'vyzvy' => $vyzvy]);
    }

    public function showSprava($id)
    {
        $sprava = Spravy::find($id);
        return view("sprava", ['sprava' => $sprava]);
    }

    public function storeSprava(Request $request){

        $spravy = new Spravy();
        $spravy->timestamps = false;
        $spravy->nadpis = $request->input('nadpis');
        $spravy->text = $request->input('sprava');
        $spravy->datum = date('Y-m-d');
        $spravy->users_idusers = $request->input('id');
        $spravy->vyzvy_idvyzvy = $request->input('vyzva');
        $spravy->save();

        return redirect('/spravy');

    }
}