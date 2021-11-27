<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcoGroup extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_groups', 'group_id', 'user_id');
    }

    public function events()
    {
        return $this->hasMany(GroupEvent::class, 'group_id', 'id');
    }
}
