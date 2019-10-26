<?php

namespace App\Http\Controllers;

use App\Models\Subory;

class SuboryController extends Controller
{
    public function showAction($id)
    {
        $subory = Subory::find($id);
        echo $subory->nazov;
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