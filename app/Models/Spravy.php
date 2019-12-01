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

    public function user()
    {
        return $this->belongsTo('App\User', 'users_idusers', 'id');
    }
}
