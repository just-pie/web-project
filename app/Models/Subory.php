<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subory extends Model
{
    protected $table = 'subory';

    protected $primaryKey = 'idsubory';

    protected $fillable = ['adresa', 'nazov'];}
