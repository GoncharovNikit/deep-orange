<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupEvent extends Model
{
    public function group()
    {
        return $this->belongsTo(EcoGroup::class, 'group_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
