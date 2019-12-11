<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vyzvy extends Model
{
    protected $table = 'vyzvy';

    protected $primaryKey = 'idvyzvy';

    protected $fillable = [
        'nazov',
        'popis',
        'ostatneinfo',
        'dlzka',
        'pridane',
        'platnedo',
        'foto',
        'oblasti_idoblasti',
        'typvyzvy_idtypvyzvy'
    ];

    public function univerzity()
    {
        return $this->belongsToMany('App\Models\Univerzity', 'univerzity_has_vyzvy', 'vyzvy_idvyzvy', 'univerzity_iduniverzity');
    }

    public function typvyzvy()
    {
        return $this->belongsTo('App\Models\Typvyzvy');
    }

    public function oblasti()
    {
        return $this->belongsTo('App\Models\Oblasti');
    }

    public function spravy()
    {
        return $this->hasMany('App\Models\Spravy', 'vyzvy_idvyzvy');
    }

}
