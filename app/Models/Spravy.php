<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spravy extends Model
{
    protected $table = 'spravy';

    protected $primaryKey = 'idspravy';

    protected $fillable = ['text'];
}
