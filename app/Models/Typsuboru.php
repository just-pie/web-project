<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typsuboru extends Model
{
    protected $table = 'typsuboru';

    protected $primaryKey = 'idtyp-suboru';

    protected $fillable = ['typ'];
}
