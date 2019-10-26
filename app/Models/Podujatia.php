<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Podujatia extends Model
{
    protected $table = 'podujatia';

    protected $primaryKey = 'idpodujatia';

    protected $fillable = ['nazov', 'datum', 'miesto'];
}
