<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vyzvy extends Model
{
    protected $table = 'vyzvy';

    protected $primaryKey = 'idvyzvy';

    protected $fillable = ['nazov'];
}
