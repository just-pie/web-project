<?php

namespace App\Http\Controllers;

use App\Models\Typsuboru;

class TypsuboruController extends Controller
{
    public function showAction($id)
    {
        $typsuboru = Typsuboru::find($id);
        echo $typsuboru->typ;
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