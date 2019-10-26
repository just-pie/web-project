<?php

namespace App\Http\Controllers;

use App\Models\Vyzvy;

class VyzvyController extends Controller
{
    public function showAction($id)
    {
        $vyzvy = Vyzvy::find($id);
        echo $vyzvy->nazov;
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