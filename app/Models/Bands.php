<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bands extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'music', 'description'];

    public function users()
   {
      return $this->hasMany('App\Models\User');
   }
}

