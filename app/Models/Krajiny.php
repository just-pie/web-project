<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krajiny extends Model
{
    protected $table = 'krajiny';

    protected $primaryKey = 'idkrajiny';

    protected $fillable = ['krajina', 'gps_coord_lat', 'gps_coord_long', 'kontinent'];

    public function univerzity()
    {
        return $this->hasMany('App\Models\Univerzity', 'krajiny_idkrajiny');
    }

    public function vyzvy()
    {
        return $this->hasMany('App\Models\Vyzvy', 'krajiny_idkrajiny');
    }
}
