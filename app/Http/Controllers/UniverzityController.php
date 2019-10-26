<?php

namespace App\Http\Controllers;

use App\Models\Univerzity;

class UniverzityController extends Controller
{
    public function showAction($id)
    {
        $univerzity = Univerzity::find($id);
        echo $univerzity->nazov;
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