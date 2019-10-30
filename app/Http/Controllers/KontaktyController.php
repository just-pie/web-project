<?php

namespace App\Http\Controllers;

use App\Models\Kontakty;

class KontaktyController extends Controller
{
    public function showAllAction()
    {
        $kontakty = Kontakty::all();
        return view("kontakt", ['kontakty' => $kontakty]);
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