<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Univerzity extends Model
{
    protected $table = 'univerzity';

    protected $primaryKey = 'iduniverzity';

    protected $fillable = ['nazov', 'zmluva-od', 'zmluva-do'];

    public function krajiny()
    {
        return $this->belongsTo('App\Models\Krajiny');
    }

    public function vyzvy()
    {
        return $this->belongsToMany('App\Models\Vyzvy', 'univerzity_has_vyzvy', 'univerzity_iduniverzity', 'vyzvy_idvyzvy');
    }
}
