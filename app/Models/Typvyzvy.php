<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typvyzvy extends Model
{
    protected $table = 'typvyzvy';

    protected $primaryKey = 'idtyp-vyzvy';

    protected $fillable = ['typ'];
}
