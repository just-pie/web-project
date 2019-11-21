<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spravy extends Model
{
    protected $table = 'spravy';

    protected $primaryKey = 'idspravy';

    protected $fillable = ['text', 'datum'];

    public function vyzvy()
    {
        return $this->belongsTo('App\Models\Vyzvy');
    }

    public function pouzivatelia()
    {
        return $this->belongsTo('App\Models\Pouzivatelia');
    }
}
