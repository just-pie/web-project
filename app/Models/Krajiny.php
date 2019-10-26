<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krajiny extends Model
{
    protected $table = 'krajiny';

    protected $primaryKey = 'idkrajiny';

    protected $fillable = ['krajina', 'kontinent'];
}
