<?php

namespace App\Http\Controllers;

use App\Models\Spravy;

class SpravyController extends Controller
{
    public function showAction($id)
    {
        $spravy = Spravy::find($id);
        echo $spravy->text;
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