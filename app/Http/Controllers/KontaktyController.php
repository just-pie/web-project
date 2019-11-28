<?php

namespace App\Http\Controllers;

use App\Models\Kontakty;

class KontaktyController extends Controller
{
    public function showKontakt()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontakt", ['kontakty' => $kontakty]);
    }

    public function showKontaktff()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontaktff", ['kontakty' => $kontakty]);
    }

    public function showKontaktfpv()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontaktfpv", ['kontakty' => $kontakty]);
    }

    public function showKontaktpf()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontaktpf", ['kontakty' => $kontakty]);
    }

    public function showKontaktfsvaz()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontaktfsvaz", ['kontakty' => $kontakty]);
    }

    public function showKontaktfss()
    {
        $kontakty = Kontakty::all();
        return view("kontakt\kontaktfss", ['kontakty' => $kontakty]);

    }
}