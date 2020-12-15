<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public function users()

    {

        return $this->belongsToMany(User::class, 'groups_users');

    }
}
