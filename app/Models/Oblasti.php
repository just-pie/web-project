<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oblasti extends Model
{
    protected $table = 'oblasti';

    protected $primaryKey = 'idoblasti';

    protected $fillable = ['nazov'];

    public function vyzvy()
    {
        return $this->hasMany('App\Models\Vyzvy', 'oblasti_idoblasti');
    }
}
