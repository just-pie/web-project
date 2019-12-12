<?php

namespace App\Http\Controllers;

use App\Models\Oblasti;
use App\Models\Spravy;
use App\Models\Typvyzvy;
use App\Models\Univerzity;
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
        $spravy = Spravy::where('vyzvy_idvyzvy',$id)->get();
        return view("vyzva", ['vyzva' => $vyzva, 'spravy' => $spravy]);
    }

    public function addVyzva()
    {
        $oblasti = Oblasti::orderBy('nazov', 'asc')->get();
        $typvyzvy = Typvyzvy::orderBy('typ', 'asc')->get();
        $univerzity = Univerzity::orderBy('nazov', 'asc')->get();
        return view("addvyzva", ['oblasti' => $oblasti, 'typvyzvy' => $typvyzvy, 'univerzity' => $univerzity]);
    }

    public function editVyzva($id)
    {
        $vyzva = Vyzvy::find($id);
        $oblasti = Oblasti::orderBy('nazov', 'asc')->get();
        $typvyzvy = Typvyzvy::orderBy('typ', 'asc')->get();
        $univerzity = Univerzity::orderBy('nazov', 'asc')->get();
        return view("editvyzva", ['vyzva' => $vyzva, 'oblasti' => $oblasti, 'typvyzvy' => $typvyzvy, 'univerzity' => $univerzity]);
    }

    public function storeVyzva(Request $request){

        $imageName = $request->file('filename')->getClientOriginalName();
        $request->file('filename')->move(public_path('images/vyzvy'), $imageName);

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
        $univerzity = $request->get('univerzity');;
        foreach ($univerzity as $item){
            $vyzvy->univerzity()->attach($item);
        }

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
                $uniAll = Univerzity::all();
                foreach ($uniAll as $item){
                    $item->vyzvy()->detach($vyzvy->idvyzvy);
                }
                $univerzity = $request->get('univerzity');;
                foreach ($univerzity as $item){
                    $vyzvy->univerzity()->attach($item);
                }
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
                $uniAll = Univerzity::all();
                foreach ($uniAll as $item){
                    $item->vyzvy()->detach($vyzvy->idvyzvy);
                }
                $univerzity = $request->get('univerzity');;
                foreach ($univerzity as $item){
                    $vyzvy->univerzity()->attach($item);
                }
            }
        }

        return redirect('/vyzvy');

    }

}