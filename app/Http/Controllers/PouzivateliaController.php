<?php

namespace App\Http\Controllers;

use App\Models\Pouzivatelia;

class PouzivateliaController extends Controller
{
    public function showAction($id)
    {
        $pouzivatelia = Pouzivatelia::find($id);
        echo $pouzivatelia->priezvisko. meno;
    }

    public function insertAction()
    {

    }

    public function updateAction($id)
    {

    }

    public function deleteAction($id)
    {

    }
}