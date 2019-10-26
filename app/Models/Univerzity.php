<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Univerzity extends Model
{
    protected $table = 'univerzity';

    protected $primaryKey = 'iduniverzity';

    protected $fillable = ['nazov', 'zmluva-od', 'zmluva-do'];
}
