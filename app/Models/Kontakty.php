<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontakty extends Model
{
    protected $table = 'kontakty';


    protected $primaryKey = 'id';

    protected $fillable = ['meno', 'email', 'telefon', 'pozicia', 'typ', 'katedrovy', 'fakulta', 'poznamka'];
}
