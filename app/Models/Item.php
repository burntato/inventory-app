<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function activities()
    {
        return $this->hasMany(Activity::class, 'id_item');
    }
}

