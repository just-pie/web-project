<?php

namespace App\Http\Controllers;

use App\Models\Oblasti;
use App\Models\Typvyzvy;
use App\Models\Vyzvy;
use Illuminate\Http\Request;

class VyzvyController extends Controller
{
    public function showVyzvy()
    {
        $vyzvy = Vyzvy::paginate(9);
        return view("vyzvy", ['vyzvy' => $vyzvy]);
    }

    public function showVyzva($id)
    {
        $vyzva = Vyzvy::find($id);
        return view("vyzva", ['vyzva' => $vyzva]);
    }

    public function addVyzva()
    {
        $oblasti = Oblasti::orderBy('nazov', 'asc')->get();
        $typvyzvy = Typvyzvy::orderBy('typ', 'asc')->get();
        return view("addvyzva", ['oblasti' => $oblasti, 'typvyzvy' => $typvyzvy]);
    }

    public function storeVyzva(Request $request){

        $this->validate($request, [
            'nazov' => 'required',
            'popis' => 'required',
            'ostatneinfo' => 'required',
            'dlzka' => 'required',
            'platnedo' => 'required|date|date_format:Y-m-d',
            'filename' => 'required',
            'oblast' => 'required',
            'typvyzvy' => 'required',
        ]);

        $imageName = $request->file('filename')->getClientOriginalName();

        $request->file('filename')->move(public_path('images'), $imageName);

        $vyzvy = new Vyzvy();
        $vyzvy->timestamps = false;
        $vyzvy->nazov = $request->input('nazov');
        $vyzvy->popis = $request->input('popis');
        $vyzvy->ostatneinfo = $request->input('ostatneinfo');
        $vyzvy->dlzka = $request->input('dlzka');
        $vyzvy->pridane = date('Y-m-d');
        $vyzvy->platnedo = $request->input('platnedo');
        $vyzvy->foto = $imageName;
        $vyzvy->oblasti_idoblasti = $request->input('oblast');
        $vyzvy->typ_vyzvy_idtyp_vyzvy = $request->input('typvyzvy');
        $vyzvy->save();

        return redirect('/vyzvy');

    }

}