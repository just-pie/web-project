<?php

namespace App\Http\Controllers;

use App\Models\Oblasti;
use App\Models\Typvyzvy;
use App\Models\Vyzvy;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class VyzvyController extends Controller
{
    public function showVyzvy()
    {
        $vyzvy = Vyzvy::orderBy('pridane', 'desc')->paginate(9);
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

    public function editVyzva($id)
    {
        $vyzva = Vyzvy::find($id);
        $oblasti = Oblasti::orderBy('nazov', 'asc')->get();
        $typvyzvy = Typvyzvy::orderBy('typ', 'asc')->get();
        return view("editvyzva", ['vyzva' => $vyzva, 'oblasti' => $oblasti, 'typvyzvy' => $typvyzvy]);
    }

    public function storeVyzva(Request $request){

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
        $vyzvy->typvyzvy_idtypvyzvy = $request->input('typvyzvy');
        $vyzvy->save();

        return redirect('/vyzvy');

    }

    public function updateVyzva(Request $request){

        $vyzvy = Vyzvy::find($request->input('id'));
        if (!is_null($request->file('filename'))){
            if (File::exists($vyzvy->foto)) {
                File::delete($vyzvy->foto);
            }
            $imageName = $request->file('filename')->getClientOriginalName();
            $request->file('filename')->move(public_path('images/vyzvy'), $imageName);
            if(!is_null($vyzvy)) {
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
            }
        } else {
            if(!is_null($vyzvy)) {
                $vyzvy->timestamps = false;
                $vyzvy->nazov = $request->input('nazov');
                $vyzvy->popis = $request->input('popis');
                $vyzvy->ostatneinfo = $request->input('ostatneinfo');
                $vyzvy->dlzka = $request->input('dlzka');
                $vyzvy->pridane = date('Y-m-d');
                $vyzvy->platnedo = $request->input('platnedo');
                $vyzvy->oblasti_idoblasti = $request->input('oblast');
                $vyzvy->typvyzvy_idtypvyzvy = $request->input('typvyzvy');
                $vyzvy->save();
            }
        }

        return redirect('/vyzvy');

    }

}