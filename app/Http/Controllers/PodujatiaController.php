<?php

namespace App\Http\Controllers;

use App\Models\Podujatia;

class PodujatiaController extends Controller
{
    public function showAction($id)
    {
        $podujatia = Podujatia::find($id);
        echo $podujatia->nazov;
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