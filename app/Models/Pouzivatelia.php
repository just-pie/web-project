<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pouzivatelia extends Model
{
    protected $table = 'pouzivatelia';

    protected $primaryKey = 'idpouzivatelia';

    protected $fillable = ['priezvisko', 'meno'];
}
