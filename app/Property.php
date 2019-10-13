<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function feature()
    {
        return $this->belongsToMany(feature::class);
    }
}
