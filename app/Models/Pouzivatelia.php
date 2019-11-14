<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pouzivatelia extends Model
{
    protected $table = 'pouzivatelia';

    protected $primaryKey = 'idpouzivatelia';

    protected $fillable = ['meno', 'priezvisko', 'email', 'datum_narodenia', 'login', 'heslo', 'roly_idroly'];
}
