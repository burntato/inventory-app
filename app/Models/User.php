<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function activities()
    {
        return $this->hasMany(Activity::class, 'id_user');
    }
}
