<?php

namespace App\Http\Controllers;

use App\Models\Typvyzvy;

class TypvyzvyController extends Controller
{
    public function showAction($id)
    {
        $typvyzvy = Typvyzvy::find($id);
        echo $typvyzvy->typ;
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