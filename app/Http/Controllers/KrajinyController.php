<?php

namespace App\Http\Controllers;

use App\Models\Krajiny;

class KrajinyController extends Controller
{
    public function showAction($id)
    {
        $krajiny = Krajiny::find($id);
        echo $krajiny->krajina;
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