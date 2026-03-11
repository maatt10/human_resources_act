<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_id';

    public function region() {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }
    public function locations() {
        return $this->hasMany(Location::class, 'location_id', 'location_id');
    }
}
