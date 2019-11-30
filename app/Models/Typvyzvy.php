<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typvyzvy extends Model
{
    protected $table = 'typvyzvy';

    protected $primaryKey = 'idtyp_vyzvy';

    protected $fillable = ['typ'];

    public function vyzvy()
    {
        return $this->hasMany('App\Models\Vyzvy', 'typ_vyzvy_idtyp_vyzvy');
    }
}
