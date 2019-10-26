<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roly extends Model
{
    protected $table = 'roly';

    protected $primaryKey = 'idroly';

    protected $fillable = ['rola'];
}
