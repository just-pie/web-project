<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typvyzvy extends Model
{
    protected $table = 'typvyzvy';

    protected $primaryKey = 'idtypvyzvy';

    protected $fillable = ['typ'];

    public function vyzvy()
    {
        return $this->hasMany('App\Models\Vyzvy', 'typvyzvy_idtypvyzvy');
    }
}
